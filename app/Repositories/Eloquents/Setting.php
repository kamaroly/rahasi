<?php namespace Rahasi\Repositories\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	//
	protected $fillable =['account_name',
					    'country',
					    'timezone',
					    'name',
					    'website',
					    'statement_description',
					    'support_website',
					    'email',
					    'phone',
					    'address',];
}
	