<?php namespace Rahasi\Repositories\Models\Eloquents;

/**
 * Settings Model
 */
class Setting extends BaseModel {

	public function user() {
		return $this->belongsTo('Rahasi\Repositories\Models\Eloquents\User');
	}
}