<?php namespace Rahasi\Handlers\Commands;

use Rahasi\Commands\SettingRegisterCommand;
use Rahasi\Repositories\Contracts\SettingsRepositoryInterface as Setting;

use Illuminate\Queue\InteractsWithQueue;

class SettingRegisterCommandHandler {

	/** @var  Rahasi\Repositories\SettingsRepository Settings repository */
	private $settings;

	function __construct(Setting $setting) {
		$this->setting = $setting;
	}
	/**
	 * Handle the command.
	 *
	 * @param  SettingRegisterCommand  $command
	 * @return void
	 */
	public function handle(SettingRegisterCommand $command)
	{
		$Settings = $this->setting->create((array) $command);
	}

}
