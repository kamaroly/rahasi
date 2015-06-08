<?php namespace Rahasi\Http\Requests;

use Rahasi\Http\Requests\Request;
use Sentry;

class PaymentRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return Sentry::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'phone_number' => 'required|numeric',
			'amount' => 'required|numeric',
		];
	}

}
