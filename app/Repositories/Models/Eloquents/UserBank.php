<?php namespace Rahasi\Repositories\Models\Eloquents;

/**
 * Eloquent  model of the user bank
 */
class UserBank extends BaseModel {
	/** @var boolean tell models not the increment */
	public $incrementing = false;

	/** @var string table name in the databse */
	public $table = 'user_banks';

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
		parent::boot();
		/**
		 * Attach to the 'creating' Model Event to provide a UUID
		 * for the `id` field (provided by $model->getKeyName())
		 */
		static::creating(function ($model) {
			$model->{$model->getKeyName()} = (string) 'bank_' . $model->generateKey();
			$model->user_id = $model->getUserId();
		});
	}
}