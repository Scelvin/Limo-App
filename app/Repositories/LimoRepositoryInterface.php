<?php

namespace App\Repositories;
use App\Http\Requests\StoreLimoRequest;
use App\Http\Requests\UpdateLimoRequest;

interface LimoRepositoryInterface extends BaseRepositoryInterface
{

    public function allLimo();

    public function findById($id);

    public function createLimo(StoreLimoRequest $request);

    public function updateLimo(UpdateLimoRequest $request, $id);

}
