<?php namespace Rahasi\Repositories;

use Rahasi\Eloquents\Setting;
/**
* Repository for the settings
*/
class SettingRepository extends Setting{

	/** @var table name  */
	protected $table = 'settings';
}