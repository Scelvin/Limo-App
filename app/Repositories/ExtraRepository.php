<?php

namespace App\Repositories;

use App\Http\Requests\StoreExtraRequest;
use App\Http\Requests\UpdateExtraRequest;
use App\Repositories\BaseRepository;
use App\Models\Extra;

class ExtraRepository extends BaseRepository implements ExtraRepositoryInterface
{
    public function allExtra()
    {
        return Extra::all();
    }

    public function findById($id)
    {
        return Extra::find($id);
    }

    public function createExtra(StoreExtraRequest $request)
    {
        $extra = Extra::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'price_per_person' => $request->has('price_per_person'),
        ]);
    }

    public function updateExtra(UpdateExtraRequest $request, $id)
    {
        $extra = Extra::find($id);
        $extra->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'price_per_person' => $request->has('price_per_person'),
        ]);
    }
}
