<?php namespace Rahasi\Http\Controllers;

use Rahasi\Commands\CustomerCreateCommand;
use Rahasi\Http\Controllers\Controller;
use Rahasi\Http\Requests\CustomerRequest;
use Rahasi\Repositories\Eloquents\CustomerRepository;
use Rahasi\Repositories\Models\Eloquents\Customer;
use Redirect;

class CustomerController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$customers = $this->user->customers;

		return view('customers.list', compact('customers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Customer $customer) {

		return view('customers.create', compact('customer'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CustomerRequest $request, CustomerRepository $customer) {

		$this->dispatch(new CustomerCreateCommand($request->all()));

		flash()->success('customer was registered');

		return Redirect::route('customers.index');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$customer = $this->user->customers()->find($id);

		return view('customers.edit', compact('customer'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CustomerRequest $request, CustomerRepository $customer) {

		$data = (array) $request->only('email', 'description');

		if ($customer->update($data, $id)) {
			flash()->success(trans('customer.updated'));
		}

		return Redirect::route('customers.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, CustomerRepository $customer) {

		if ($customer->delete($id)) {
			flash()->success(trans('customer.deleted'));
		}

		return Redirect::route('customers.index');
	}

}
