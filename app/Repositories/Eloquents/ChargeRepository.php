<?php namespace Rahasi\Repositories\Eloquents;

use Rahasi\Repositories\Contracts\ChargeRepositoryInterface;

/**
 * Mobile Repository
 */
class ChargeRepository extends Repository implements ChargeRepositoryInterface {
	function model() {
		return 'Rahasi\Repositories\Models\Eloquents\Charge';
	}
}