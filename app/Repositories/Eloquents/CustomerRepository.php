<?php namespace Rahasi\Repositories\Eloquents;

use Rahasi\Events\CustomerWasRegistered;
use Rahasi\Events\CustomerWasUpdated;
use Rahasi\Events\CustomerWasDeleted;
/**
 * Mobile Repository
 */
class CustomerRepository extends Repository {
	function model() {
		return 'Rahasi\Repositories\Models\Eloquents\Customer';
	}
}