<?php namespace Rahasi\Handlers\Commands;

use Rahasi\Commands\SettingRegisterCommand;

use Illuminate\Queue\InteractsWithQueue;

class SettingRegisterCommandHandler {

	/**
	 * Handle the command.
	 *
	 * @param  SettingRegisterCommand  $command
	 * @return void
	 */
	public function handle(SettingRegisterCommand $command)
	{
		dd($command);
	}

}
