<?php namespace Rahasi\Handlers\Commands;

use Rahasi\Commands\BankCommand;
use Rahasi\Repositories\Eloquents\UserBankRepository;

class BankCommandhandler {

	/**
	 * Handle the command.
	 *
	 * @param  BankCommand  $command
	 * @return void
	 */
	public function handle(BankCommand $userDetails, UserBankRepository $user) {
		//Attempt to add new bank
		if ($bank = $user->banks->create($userDetails)) {
			Event::fire(new BankWasSaved($bank));
		}
	}

}
