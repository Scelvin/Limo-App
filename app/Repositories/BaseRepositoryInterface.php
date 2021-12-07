<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function errors();

    public function all(array $input = null);

    public function get($id, array $input = null);

    public function getWhere($column, $value, array $input = null);

    public function create(array $data);

    public function update(array $data);

    public function delete($id);

    public function deleteWhere($column, $value);
}
