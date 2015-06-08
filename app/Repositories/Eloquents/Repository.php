<?php namespace Rahasi\Repositories\Eloquents;

use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Events\Dispatcher;
use Rahasi\Repositories\Contracts\RepositoryInterface;

abstract class Repository implements RepositoryInterface {

	/**
	 * Application instance
	 * @var Illuminate\Container\Container
	 */
	protected $app;

	protected $dispatcher;

	protected $eventBaseName;

	/**
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $model;

	function __construct(App $app, Dispatcher $dispatcher) {

		$this->app = $app;

		$this->dispatcher = $dispatcher;

		$this->makeModel();

		$this->getEventBaseName();
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

		if ($results = $this->model->create($data)) {
			$event = 'Rahasi\Events\\' . $this->eventBaseName . 'WasRegistered';
			// Fire the 'user registered' event
			$this->dispatcher->fire(new $event($results));
		}
		return $results;
	}

	/**
	 * @param array $data
	 * @param $id
	 * @param string $attribute
	 * @return mixed
	 */
	public function update(array $data, $id, $attribute = "id") {

		if ($results = $this->model->where($attribute, '=', $id)->update($data)) {

			$event = 'Rahasi\Events\\' . $this->eventBaseName . 'WasUpdated';
			// Fire the 'user registered' event
			$this->dispatcher->fire(new $event($results));
		}
		return $results;
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function delete($id) {

		$item = $this->model->findOrFail($id);

		if ($item->delete()) {

			$event = 'Rahasi\Events\\' . $this->eventBaseName . 'WasDeleted';
			// Fire the 'Model deleted' event
			$this->dispatcher->fire(new $event($item));
		}
		return $item;
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
	public function makeModel() {
		$model = $this->app->make($this->model());

		if (!$model instanceof Model) {
			throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
		}

		return $this->model = $model;
	}

	/**
	 * [getClassName description]
	 * @return [type] [description]
	 */
	public function getEventBaseName() {
		// List of string to be removed
		$stringToBeRemoved = ['rahasi\repositories\eloquents\\' => ' ', 'repository' => ''];

		//get class really name
		$eventBaseName = strtolower(get_called_class());

		// Make sure we remove all unwanted string
		foreach ($stringToBeRemoved as $string => $replacement) {

			$eventBaseName = str_replace($string, $replacement, $eventBaseName);
		}
		// Convert to class naming converstion
		// Rahasi.Repositories.Eloquents.
		$this->eventBaseName = str_replace(' ', '', ucwords($eventBaseName));
	}

}