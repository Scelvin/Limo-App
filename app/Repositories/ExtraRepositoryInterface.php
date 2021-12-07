<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Requests\StoreExtraRequest;
use App\Http\Requests\UpdateExtraRequest;

interface ExtraRepositoryInterface extends BaseRepositoryInterface
{

    public function allExtra();

    public function findById($id);

    public function createExtra(StoreExtraRequest $request);

    public function updateExtra(UpdateExtraRequest $request, $id);

}
