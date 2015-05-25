<?php namespace Rahasi\Http\Controllers;
use Session;
use Rahasi\Repositories\Models\Eloquents\User;
use Rahasi\Repositories\Models\Eloquents\Charge as Payments;

class WelcomeController extends Controller {

	public $user;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');

		$this->user 	=	Session::get('userId');
	}

	public function index()
	{
		return view('welcome');
	}
	/**
	 * Show Rahasi home page
	 */
	public function dashboard(Payments $payment)
	{
		$payments = $payment->lists('created_at','amount');

		return view('dashboard',compact('payments'));
	}

	public function gross($items,User $user)
	{

	// Get current user payments
	$charges = $user->find($this->user)->payments()->orderBy('created_at')->lists($items);

	if ($items == 'created_at') {
	return array_map(function($charge){
		return  substr($charge,0,10);
	}, $charges);
	}
	return array_map(function($charge){
		return  (int) $charge;
	}, $charges);
	}

}
