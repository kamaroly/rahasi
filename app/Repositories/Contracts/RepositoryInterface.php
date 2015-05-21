<?php namespace Rahasi\Repositories\Contracts;

interface RepositoryInterface {
  function all($columns = array('*'));
  function paginate($perPage = 15, $columns = array('*'));
  function create(array $data);
  function update(array $data, $id);
  function delete($id);
  function find($id, $columns = array('*'));
  function findBy($field, $value, $columns = array('*'));

}