<?php

namespace App\Repositories;

use App\Repositories\BaseRepositoryInterface;

// use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    // protected $model;

    // public function __construct(Model $model)
    // {
    //     $this->model = $model;
    // }

    // public function create(array $attributes): Model
    // {
    //     return $this->model->create($attributes);
    // }

    // public function find($id): ?Model
    // {
    //     return $this->model->find($id);
    // }

    public function errors()
    {
        //Display all errors.
    }

    public function all(array $input = null)
    {
        //View all info related to the Model.
    }

    public function get($id, array $input = null)
    {
        //Get info as per id.
    }

    public function getWhere($column, $value, array $input = null)
    {
        //Get info as per condition.
    }

    public function create(array $data)
    {
        //Create new record.
    }

    public function update(array $data)
    {
        //Update record.
    }

    public function delete($id)
    {
        //Delete record as per id.
    }

    public function deleteWhere($column, $value)
    {
        //Delete record as per condition.
    }

}
