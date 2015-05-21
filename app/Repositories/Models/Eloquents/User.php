<?php namespace Rahasi\Repositories\Models\Eloquents;


class User extends BaseModel {


	// Removing auto-id increment;
	public $incrementing = false;

	// Hiding Attributes From Array Or JSON Conversion
	protected $hidden = ['customer_id','created_at','updated_at'];

	public function payments()
	{
			return $this->hasMany('Rahasi\Repositories\Models\Eloquents\Charge');
	}

	/**
	 * Customer of this card
	 */
	public function customer()
	{
		return $this->hasMany('\Rahasi\Repositories\Models\Eloquents\Customer');
	}
	/**
	 * Customer Cards
	 */
	public function cards()
	{
		return $this->hasMany('\Rahasi\Repositories\Models\Eloquents\Card');
	}

	/**
	 * Customer MFS account
	 */
	public function mobile()
	{
		return $this->hasMany('\Rahasi\Repositories\Models\Eloquents\Mobile');
	}
}
