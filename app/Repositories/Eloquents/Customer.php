<?php namespace Rahasi\Repositories\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Customer extends BaseModel {

	public $incrementing = false;

	/**
	 * Customer Cards
	 */
	public function cards()
	{
		return $this->hasMany('\Rahasi\Repositories\Eloquents\Card');
	}

	/**
	 * Customer MFS account
	 */ 
	public function mobile()
	{
		return $this->hasMany('\Rahasi\Repositories\Eloquents\Mobile');
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
            $model->{$model->getKeyName()} = (string) 'cus_'.$model->generateKey();
        });
    }
}
