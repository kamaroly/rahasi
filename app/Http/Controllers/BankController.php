<?php namespace Rahasi\Http\Controllers;

use Input;
use Rahasi\Commands\BankCommand;
use Rahasi\Http\Controllers\Controller;
use Rahasi\Http\Requests\BankRequest;
use Rahasi\Repositories\Models\Eloquents\User;
use Rahasi\Repositories\Models\Eloquents\UserBank;
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
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(UserBank $bank) {

		$bank = $bank;

		return view('account.banks.create', compact('bank'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BankRequest $request) {

		$this->dispatch(new BankCommand($request->all()));

		flash()->success(trans('bank.new_bank_is_added'));

		return Redirect::route('account.banks');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {

		$bank = $this->user->banks()->find($id);

		return view('account.banks.edit', compact('bank'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {

		$bank = $this->user->banks()->findOrFail($id);

		$bankDetails = (array) Input::all();

		// Update the bank
		if ($bank->update($bankDetails)) {
			$this->dispatcher->fire('rahasi.bank.updated', ['bank' => $bank]);
			flash()->success(trans('bank.bank_is_updated'));
		}
		return Redirect::route('account.banks');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($bankId) {

		$bank = $this->user->banks()->findOrFail($bankId);
		// Delete the bank
		if ($bank->delete()) {
			$this->dispatcher->fire('rahasi.bank.destroyed', ['bank' => $bank]);
			flash()->success(trans('bank.bank_is_deleted'));
		}

		return Redirect::route('account.banks');
	}

}
