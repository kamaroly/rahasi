<?php namespace Rahasi\Repositories\Eloquents;

use Rahasi\Repositories\Contracts\MobileRepositoryInterface;
/**
* Mobile Repository
*/
class MobileRepository extends Repository implements MobileRepositoryInterface
{
	function model()
	{
		return 'Rahasi\Repositories\Models\Eloquents\Mobile';
	}
}