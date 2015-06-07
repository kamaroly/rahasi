<?php namespace Rahasi\Http\Requests;

use Rahasi\Http\Requests\Request;

class bankRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return \Sentry::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'currency' => 'required|alpha',
			'bank_country' => '|required|alpha',
			'routing_number' => 'required|numeric',
			'account_number' => 'required|numeric',
			'account_number_confirm' => 'required|numeric',
		];
	}

}
