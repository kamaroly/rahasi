<?php namespace Rahasi\Repositories\Models\Eloquents;

class Charge extends BaseModel {

	public $incrementing = false;

	// Hiding Attributes From Array Or JSON Conversion
	protected $hidden = ['customer_id', 'chargeable_type', 'chargeable_id', 'updated_at'];

	/** @var array allowed mass assignment fields */
	protected $fillable = ['livemode',
		'paid',
		'status',
		'amount',
		'currency',
		'refounded',
		'chargeable_id',
		'chargeable_type',
		'captured',
		'balance_transaction',
		'failure_message',
		'failure_code',
		'amount_refunded',
		'customer_id',
		'invoice',
		'description',
		'dispute',
		'statement_descriptor',
		'receipt_email',
		'receipt_number',
		'application_fee',
	];
	/**
	 * Chargeable object morphy Relationship
	 */
	public function chargeable() {
		return $this->morphTo();
	}

	/**
	 * Customer of this charge
	 */
	public function customer() {
		return $this->belongsTo('\Rahasi\Repositories\Models\Eloquents\Customer');
	}

	/** User relationship */
	public function user() {
		return $this->belongsTo('Rahasi\Repositories\Models\Eloquents\User');
	}

	/**
	 * The "booting" method of the model.
	 *
	 * @return void
	 */
	protected static function boot() {
		parent::boot(); /**
		 * Attach to the 'creating' Model Event to provide a UUID
		 * for the `id` field (provided by $model->getKeyName())
		 */
		static::creating(function ($model) {
			$model->{$model->getKeyName()} = (string) 'ch_' . $model->generateKey();
			$model->user_id = (isset($model->attributes['user_id'])) ? $model->attributes['user_id'] : $model->getUserId();
		});
	}

	// public function summaryReport($userId)
	// {
	// return	DB::table($this->table)
	//              ->select(DB::raw('DATE(created_at)'), DB::raw('count(*) as total'))
	//              ->groupBy(DB::raw('DATE(created_at)'))
	//              ->get();
	// }
}
