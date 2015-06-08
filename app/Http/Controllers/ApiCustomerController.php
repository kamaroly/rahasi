<?php namespace Rahasi\Http\Controllers;
use Rahasi\Http\Requests\CustomerRequest;
use Rahasi\Repositories\Eloquents\CustomerRepository;
use Rahasi\Transformers\CustomerTransformer;

class ApiCustomerController extends ApiController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		dd('wy here?');
		return $this->response->withCollection($this->user->customers, new CustomerTransformer);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CustomerRequest $request, CustomerRepository $customer) {
		try {

			$data = (array) $request->all();
			$data['user_id'] = $this->user->id;
			$newCustomer = $customer->create($data);
			return $this->response->withItem($newCustomer, new CustomerTransformer);

		} catch (ModelNotFoundException $e) {

			return $this->response->errorNotFound();

		}
	}

}
