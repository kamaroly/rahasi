<?php namespace Rahasi\Http\Controllers;

use Rahasi\Http\Controllers\Controller;
use Rahasi\Http\Requests\GeneralSettingsRequest;
use Rahasi\Repositories\Models\Eloquents\ApiKey;
use Redirect;
use Setting;

class SettingController extends Controller {

	function __construct() {
		parent::__construct();
		Setting::setExtraColumns(array(
			'user_id' => $this->user,
		));
	}

	public function general() {
		return view('settings.general');
	}

	public function api(ApiKey $apiKey) {
		$keys = $apiKey->getByUser($this->user);

		return view('settings.api', compact('keys'));
	}

	public function transfers() {
		return view('settings.transfers');
	}

	public function transfersAdd() {
		return view('settings.bankform');
	}

	/**
	 * Save settings
	 */
	public function generalSave(GeneralSettingsRequest $request) {
		// Get all submited settings
		$settings = $request->all();

		// Remove form tocken as we don't need it
		unset($settings['_token']);

		foreach ($settings as $key => $value) {
			Setting::set($key, $value);
		}
		Setting::save();

		return Redirect::back();
	}

	public function newKey($keytype, ApiKey $apikey) {
		return $apikey->newKey($keytype, $this->user);
	}
}
