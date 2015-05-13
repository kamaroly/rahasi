<?php namespace Rahasi\Repositories\Settings;
 
use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
 
class SettingRepository extends Repository {
 
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Rahasi\Repositories\Eloquents\Setting';
    }
}