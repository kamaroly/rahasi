<?php namespace Rahasi\Commands;

use Rahasi\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;

class SettingRegisterCommand extends Command{

	// Array containing settings
	public $settings 	=	[];

	public function __construct($settings)
	{
		$this->settings = $settings;
	}

}
