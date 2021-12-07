<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\File;

use App\Http\Requests\StoreLimoRequest;
use App\Http\Requests\UpdateLimoRequest;

use App\Models\Limo;
use App\Models\Extra;

class LimoController extends Controller
{

    public function index()
    {
        $limos = Limo::all();
        return view('admin.limos.index', compact('limos'));
    }

    public function create()
    {
        return view('admin.limos.create');
    }

    public function store(StoreLimoRequest $request)
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

        if ($request->file('image_path')) {
            $newImageName = "limo-" . $limo->id . "." . $request->image_path->extension();

            $request->image_path->move(public_path('images'), $newImageName);
            $limo->image_path = $newImageName;
            $limo->save();
        }
        return redirect()->route('limos.index')->with('message', 'Successfully added!');
    }

    public function edit($id)
    {
        $limo = Limo::find($id);
        $extras = Extra::all();
        $services = Service::all();

        return view('admin.limos.edit', compact('limo', 'extras', 'services'));
    }

    public function update(UpdateLimoRequest $request, $id)
    {
        $limo = Limo::find($id);

        $limo = Limo::update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'passengers' => $request->input('passengers'),
            'luggage' => $request->input('luggage'),
        ]);

        $service = Service::update([
            'name' => $request->input('sname'),
            'price' => $request->input('price'),
        ]);

        $extra = Extra::update([
            'name' => $request->input('extras'),
            'price' => $request->input('price'),
            'price_per_person' => $request->has('price_per_person'),
        ]);

        if ($request->file('file_path')) {

            if (file_exists('/images' . '/' . $limo->file_path)) {
                File::delete('/images' . '/' . $limo->file_path);
            }

            $newImageName = "limo-" . $limo->id . "." . $request->file_path->extension();

            $request->file_path->move(public_path('images'), $newImageName);
            $limo->file_path = $newImageName;
            $limo->save();
        }
        return redirect()->route('limos.index')->with('message', 'Successfully updated!');
    }

    public function destroy($id)
    {
        Limo::findOrFail($id)->delete();

        return back()->with('message', 'Successfully deleted!');
    }
}
