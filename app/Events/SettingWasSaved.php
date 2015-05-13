<?php namespace Rahasi\Events;

use Rahasi\Events\Event;

use Illuminate\Queue\SerializesModels;

class SettingWasSaved extends Event {

	use SerializesModels;

	public $setings;
	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($settings)
	{
		$this->settings 	=	$setings;
	}

}
