<?php namespace Rahasi\Http\Controllers;

use Rahasi\Commands\BankCommand;
use Rahasi\Http\Controllers\Controller;
use Rahasi\Http\Requests\BankRequest;
use Redirect;

class BankController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {

		$banks = $this->user->banks;
		return view('account.banks.list', compact('banks'));
	}

	public function transfersAdd() {

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {

		return view('account.bankform');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BankRequest $request) {

		$this->dispatch(new BankCommand($request->all()));

		return Redirect::route('account.banks');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		dd('insider BankController @destroy, bank destroyed');
	}

}
