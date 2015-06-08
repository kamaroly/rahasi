<?php namespace Rahasi\Http\Controllers;

use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Rahasi\Repositories\Models\Eloquents\User;
use Session;

abstract class Controller extends BaseController {

	/**
	 * Instance of the user model
	 * @var [type]
	 */
	public $user;
	/**
	 * User ID of the current sessiont
	 * @var Rahasi\Repositories\Models\Eloquents\User;
	 */
	public $userId;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	public $dispatcher;

	public function __construct(Dispatcher $dispatcher) {

		$this->middleware('sentry.auth');

		$this->userId = Session::get('userId');

		$this->user = !$this->userId ?: User::findOrFail($this->userId);

		$this->dispatcher = $dispatcher;
	}

	use DispatchesCommands, ValidatesRequests;

}
