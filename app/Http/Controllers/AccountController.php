<?php namespace Rahasi\Http\Controllers;

use Rahasi\Http\Controllers\Controller;
use Rahasi\Http\Requests\GeneralaccountRequest;
use Rahasi\Repositories\Models\Eloquents\ApiKey;
use Redirect;
use Setting;

class AccountController extends Controller {

	/**
	 * Method to show generate account settings
	 * @return [type] [description]
	 */
	public function general() {
		return view('account.general');
	}

	public function api(ApiKey $apiKey) {

		$keys = $this->user->apiKeys()->first();

		return view('account.api', compact('keys'));
	}

	/**
	 * Save account
	 */
	public function generalSave(GeneralaccountRequest $request) {
		// Get all submited account
		$account = $request->all();

		// Remove form tocken as we don't need it
		unset($account['_token']);

		foreach ($account as $key => $value) {
			Setting::set($key, $value);
		}
		Setting::save();

		return Redirect::back();
	}

	/**
	 * Get new API KEY
	 * @param  string $keytype type of the key
	 * @param  string $apikey  this holds the instance of the apikey model that is used to generate new api key
	 * @return string          the new generated api
	 */
	public function newKey($keytype, ApiKey $apikey) {
		return $apikey->newKey($keytype, $this->userId);
	}
}
