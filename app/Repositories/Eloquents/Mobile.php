<?php namespace Rahasi\Repositories\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model {

	// Removing auto-id increment;
	public $incrementing = false;

	// Hiding Attributes From Array Or JSON Conversion
	protected $hidden = ['customer_id','created_at','updated_at'];
	/**
	 * Relationship with the charge table
	 */
	public function charge()
	{
		return $this->morphMany('Rahasi\Repositories\Eloquents\Charge','chargeable');
	}

	/**
	 * Customer of this Mobile
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
            $model->{$model->getKeyName()} = (string) uniqid('mobile_');
        });
    }
}
