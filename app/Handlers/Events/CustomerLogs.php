<?php namespace Rahasi\Handlers\Events;

use Illuminate\Contracts\Queue\ShouldBeQueued;
use Log;
use Rahasi\Events\CustomerWasRegistered;

class CustomerLogs implements ShouldBeQueued {

	/**
	 * Handle the event.
	 *
	 * @param  CustomerWasRegistered  $event
	 * @return void
	 */
	public function handle(CustomerWasRegistered $event) {
		$logFile = 'customers.log';

		Log::useDailyFiles(storage_path() . '/logs/' . $logFile);
		Log::info($event->customerDetails);
	}

}
