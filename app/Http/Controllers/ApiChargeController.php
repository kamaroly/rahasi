<?php namespace Rahasi\Http\Controllers;

use Input;
use Rahasi\Http\Controllers\ApiController;
use Rahasi\Services\Payments\Charge;
use Rahasi\Transformers\ChargeTransformer;

class ApiChargeController extends ApiController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Charge $charge) {

		try {

			$data = (array) Input::all();
			$data['user_id'] = $this->user->id;
			$newcharge = $charge->processPayment($data);

			header('Access-Control-Allow-Origin: *');
			header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
			header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
			header('Access-Control-Allow-Credentials: true');

			return $this->response->withItem($newcharge, new ChargeTransformer);

		} catch (ModelNotFoundException $e) {

			return $this->response->errorNotFound();

		}
	}

}
