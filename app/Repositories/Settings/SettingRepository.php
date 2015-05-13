<?php namespace Rahasi\Repositories\Settings;
 
use Rahasi\Repositories\Contracts\RepositoryInterface;
use Rahasi\Repositories\Abstracts\Repository;
 
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