<?php namespace Rahasi\Handlers\Commands;

use Event;
use Rahasi\Commands\BankCommand;
use Rahasi\Events\BankWasAdded;
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

		// Make sure this array is not a collection
		$userDetails = array_shift($userDetails);

		//Attempt to add new bank
		if ($bank = $user->banks()->create($userDetails)) {
			Event::fire(new BankWasAdded($bank));
		}
	}

}
