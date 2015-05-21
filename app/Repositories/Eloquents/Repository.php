<?php namespace Rahasi\Repositories\Eloquents;

use Rahasi\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;

abstract class Repository implements RepositoryInterface{

	/**
	 * Application instance
	 * @var Illuminate\Container\Container
	 */
	protected $app;

	/**
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $model;

	function __construct(App $app) {

		$this->app   = $app;

		$this->makeModel();
	}
	 /**
     * Specify Model class name
     * 
     * @return mixed
     */
	abstract function model();

	/**
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*')) {
        return $this->model->get($columns);
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*')) {
        return $this->model->paginate($perPage, $columns);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data) {
        return $this->model->create($data);
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute="id") {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id) {
        return $this->model->destroy($id);
    }

    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

	 /**
     * @return Model
     * @throws RepositoryException
     */
    public function makeModel()
    {
    	$model  = $this->app->make($this->model());

    	if(!$model instanceof Model)
    	{
    		throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
    	}

    	return $this->model = $model;
    }

}