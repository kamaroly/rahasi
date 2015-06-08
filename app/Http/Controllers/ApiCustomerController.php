<?php namespace Rahasi\Http\Controllers;
use Rahasi\Http\Requests\CustomerRequest;
use Rahasi\Repositories\Eloquents\CustomerRepository;

class BookTransformer {
	public function transform($customer) {

		return ['email' => $customer->email,
			'description' => $customer->description,
			'livemode' => (bool) $customer->livemode,
			'registered' => $customer->created_at,
		];
	}
}
class ApiCustomerController extends ApiController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {

		$customer = $this->response->withCollection($this->user->customers, new BookTransformer);

		dd($customer);
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
			return $this->response->withItem($newCustomer, new BookTransformer);

		} catch (ModelNotFoundException $e) {

			return $this->response->errorNotFound();

		}
	}

}
