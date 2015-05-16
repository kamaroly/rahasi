<?php namespace Rahasi\Repositories\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model {

	public $incrementing = false;

	// Hiding Attributes From Array Or JSON Conversion
	protected $hidden = ['customer_id','chargeable_type','chargeable_id','updated_at'];

	/**
	 * Chargeable object morphy Relationship
	 */
	public function chargeable()
	{
		return $this->morphTo();
	}

	/**
	 * Customer of this charge
	 */
	public function customer()
	{
		return $this->belongsTo('\Rahasi\Repositories\Eloquents\Customer');
	}

	/**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();        /**
         * Attach to the 'creating' Model Event to provide a UUID
         * for the `id` field (provided by $model->getKeyName())
         */
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) uniqid('ch_');
        });
    }
}
