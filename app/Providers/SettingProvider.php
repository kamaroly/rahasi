<?php namespace Rahasi\Providers;

use Illuminate\Support\ServiceProvider;
use Sentinel\Repositories\User\SentryUserRepository;

class SettingProvider extends ServiceProvider {
/**
	 * Bootstrap the application services by making sure the Session.
	 *
	 * @return void
	 */
	public function boot(SentryUserRepository $user)
	{
		\Setting::setExtraColumns(array(
		   		 'user_id' => $user->getUser()->id// \Session::get('userId')
				));

	}

	public function register()
	{
		# code...
	}

}
