<?php

namespace App\Repositories;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function allUser();

    public function findById($id);

    public function createUser(StoreUserRequest $request);

    public function updateUser(UpdateUserRequest $request);

}
