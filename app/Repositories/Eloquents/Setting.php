<?php namespace Rahasi\Repositories\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	protected $table 	= 'settings';
	protected $fillable =['key','value','user_id'];
}
	