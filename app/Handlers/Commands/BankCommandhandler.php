<?php namespace Rahasi\Handlers\Commands;

use Rahasi\Commands\BankCommand;
use Rahasi\Repositories\Models\Eloquents\User;
use Session;

class BankCommandhandler {

	/**
	 * Handle the command.
	 *
	 * @param  BankCommand  $command
	 * @return void
	 */
	public function handle(BankCommand $userDetails) {

		$user = User::findOrFail(Session::get('userId'));

		// Make sure userDetails is an Array
		$userDetails = (array) $userDetails;

		// dd($userDetails);
		//Attempt to add new bank
		if ($bank = $user->banks()->create($userDetails)) {

			dd($bank);
			Event::fire(new BankWasSaved($bank));
		}

		dd('test');
	}

}
