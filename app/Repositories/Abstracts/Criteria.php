<?php namespace Rahasi\Repositories\Abstracts;

use Rahasi\Repositories\Contracts\SettingsRepositoryInterface as Repository;

abstract class Criteria {

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public abstract function apply($model, Repository $repository);
}