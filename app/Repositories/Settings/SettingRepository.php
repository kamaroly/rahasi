<?php namespace Rahasi\Repositories\Settings;

use Sentry;
use Rahasi\Repositories\Contracts\SettingsRepositoryInterface;
use Rahasi\Repositories\Abstracts\Repository;
 
class SettingRepository extends Repository {
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Rahasi\Repositories\Eloquents\Setting';
    }
    /**
     * Add new setting into the database;
     */
    public function create(array $settings){

    	$user_id = Sentry::getUser()->id;

    	$settings = $this->setSettings($settings);
    	$count 	  = 0 ;
 		foreach ($settings as $key => $value) {

 			$setting = array('key' => $key,'value' => $value,'user_id' => $user_id);

 			$this->updateOrSave($setting);

 			$count++;
 		}

 		return $count;
    }

    private function updateOrSave(array $setting){
    	// Buffer and remove value if it exists
    	$newSetting = $setting;
    	unset($setting['value']);

    	// Determine if we have this key for this user in the database already
    	$inDbSetting	= 	$this->model->where($setting);

    	$setting 		=  $inDbSetting->count()?$inDbSetting->update($newSetting):$this->model->create($newSetting);

    	return $setting;
    }
    /**
     * Get the proper format of the array
     */
    private function setSettings(array $settings)
    {
    	$settings = array_shift($settings);;

    	unset($settings['_token']);

    	return $settings;
    }
}