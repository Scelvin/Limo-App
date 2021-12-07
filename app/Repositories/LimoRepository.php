<?php

namespace App\Repositories;

use App\Http\Requests\StoreLimoRequest;
use App\Http\Requests\UpdateLimoRequest;
use App\Repositories\BaseRepository;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Models\Limo;


abstract class LimoRepository extends BaseRepository implements LimoRepositoryInterface
{

    public function allLimo()
    {
        return Limo::all();
    }

    public function findById($id)
    {
        return Limo::find($id);
    }

    public function createLimo(StoreLimoRequest $request)
    {
        $limo = Limo::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image_path' => $request->file('image_path'),
            'passengers' => $request->input('passengers'),
            'luggage' => $request->input('luggage'),
            'status' => '',
        ]);

        // $extra = Extra::create([
        //     'name' => $request->input('sname'),
        //     'price' => $request->input('price'),
        //     'price_per_person' => $request->input('price_per_person'),
        // ]);

        if ($request->file('image_path'))
        {
            $newImageName = "limo-" . $limo->id . "." . $request->image_path->extension();

            $request->image_path->move(public_path('images'), $newImageName);
            $limo->image_path = $newImageName;
            $limo->save();
        }
    }

    public function updateLimo(UpdateLimoRequest $request, $id)
    {
        $limo = Limo::find($id);

        $limo->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        if($request->file('file_path')) {

            if(file_exists('/images' . '/' .  $limo->file_path))
            {
                File::delete('/images' . '/' .  $limo->file_path);
            }

            $newImageName = "limo-" . $limo->id . "." . $request->file_path->extension();

            $request->file_path->move(public_path('images'), $newImageName);
            $limo->file_path = $newImageName;
            $limo->save();
        }
    }

 }
