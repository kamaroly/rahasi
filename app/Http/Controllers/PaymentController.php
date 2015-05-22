<?php namespace Rahasi\Http\Controllers;

use Redirect,Session;
use Rahasi\Http\Requests;
use Rahasi\Repositories\Contracts\ChargeRepositoryInterface as Charge;
use Rahasi\Repositories\Models\Eloquents\User;
use Rahasi\Commands\PaymentCommand;
use Rahasi\Http\Requests\PaymentRequest;
use Rahasi\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PaymentController extends Controller {

	/**
	 * Mobile repository
	 * @var Rahasi\Repositories\Contracts\MobileRepositoryInterface;
	 */
	public $charge;

	function __construct(Charge $charge) {
		$this->charge = $charge;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(User $user)
	{

		$userId = Session::get('userId');

		$payments 	= $user->find($userId)->payments->all();

		return view('payments.index',compact('payments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('payments.form');
	}

	/**
	 * Store a newly created payment.
	 *
	 * @return Response
	 */
	public function store(PaymentRequest $payment)
	{
	   $this->dispatch(new PaymentCommand($payment->all()));

	   flash()->success('Payment Created.');

	   return Redirect::route('payments.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
