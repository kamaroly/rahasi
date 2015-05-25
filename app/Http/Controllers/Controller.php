<?php namespace Rahasi\Http\Controllers;

use Session;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	public $user;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->user 	=	Session::get('userId');
	}

	use DispatchesCommands, ValidatesRequests;

}
