<?php namespace Rahasi\Http\Controllers;

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
	public function __construct() {

		$this->userId = Session::get('userId');

		$this->user = User::findOrFail($this->userId);
	}

	use DispatchesCommands, ValidatesRequests;

}
