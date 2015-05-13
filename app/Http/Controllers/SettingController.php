<?php namespace Rahasi\Http\Controllers;

use Redirect;
use Rahasi\Http\Requests;
use Rahasi\Http\Requests\GeneralSettingsRequest;
use Rahasi\Commands\SettingRegisterCommand;
use Rahasi\Repositories\Contracts\SettingsRepositoryInterface as Setting;
use Rahasi\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SettingController extends Controller {

	/** @var Rahasi\Models\Settings holds settings model instance */
	private $setting;

	function __construct(Setting $setting) {
		$this->setting = $setting;
	}


	public function general()
	{
		$settings 	=	$this->setting->all();

		return view('settings.general',compact('settings'));
	}

	public function generalSave(GeneralSettingsRequest $request)
	{
		// Dispatch setting object
		$this->dispatch(new SettingRegisterCommand($request->all()));

		return 	Redirect::back();
	}
}
