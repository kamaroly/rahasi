<?php namespace Rahasi\Repositories\Models\Eloquents;


class Card extends BaseModel {


	// Removing auto-id increment;
	public $incrementing = false;

	// Hiding Attributes From Array Or JSON Conversion
	protected $hidden = ['customer_id','created_at','updated_at'];

	public function charge()
	{
			return $this->morphMany('Rahasi\Repositories\Eloquents\Charge','chargeable');
	}

	/**
	 * Customer of this card
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
        static::creating(function ($model)  {
        	
             $model->{$model->getKeyName()} = (string) 'card_'.$model->generateKey(); 
           
        });
    }
}
