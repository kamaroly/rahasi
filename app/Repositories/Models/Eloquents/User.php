<?php namespace Rahasi\Repositories\Models\Eloquents;

class User extends \Sentinel\Models\User {

	// Removing auto-id increment;
	public $incrementing = false;

	// Hiding Attributes From Array Or JSON Conversion
	protected $hidden = ['customer_id', 'created_at', 'updated_at'];

	public function payments() {
		return $this->hasMany('Rahasi\Repositories\Models\Eloquents\Charge');
	}

	/**
	 * Customer of this card
	 */
	public function customer() {
		return $this->hasMany('\Rahasi\Repositories\Models\Eloquents\Customer');
	}
	/**
	 * Customer Cards
	 */
	public function cards() {
		return $this->hasMany('\Rahasi\Repositories\Models\Eloquents\Card');
	}

	/**
	 * Customer MFS account
	 */
	public function mobile() {
		return $this->hasMany('\Rahasi\Repositories\Models\Eloquents\Mobile');
	}

	/**
	 * Relationship with with the userBanks model
	 * @return mixed
	 */
	public function banks() {
		return $this->hasMany('\Rahasi\Repositories\Models\Eloquents\UserBank');
	}
	/**
	 * User API KEYS
	 * @return mixed
	 */
	public function apiKeys() {
		return $this->hasMany('\Rahasi\Repositories\Models\Eloquents\ApiKey');
	}
	/**
	 * Get current user settings
	 * @return mixed
	 */
	public function settings() {
		return $this->hasMany('\Rahasi\Repositories\Models\Eloquents\Setting', 'user_id', 'id');
	}
}
