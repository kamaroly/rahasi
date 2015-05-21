<?php namespace Rahasi\Repositories\Eloquents;

use Rahasi\Repositories\Contracts\RepositoryInterface as Repository;

abstract class Criteria {

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public abstract function apply($model, Repository $repository);
}