<?php

namespace App\Http\Controllers;

use App\Models\Extra;

use App\Http\Requests\StoreExtraRequest;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function index()
    {
        $extras = Extra::all();
        return view('admin.extras.index', compact('extras'));
    }

    public function create()
    {
        return view('admin.extras.create');
    }

    public function store(StoreExtraRequest $request)
    {
        $extra = Extra::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'price_per_person' => $request->has('price_per_person'),
        ]);

        return redirect()->route('extras.index')->with('message','Extra created successfully!');
    }

    public function edit($id)
    {
        $extra = Extra::find($id);
        return view('admin.extras.edit', compact('extra'));
    }

    public function update(Request $request, $id)
    {
        $extra = Extra::find($id);
        $extra->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'price_per_person' => $request->has('price_per_person'),
        ]);

        return redirect()->route('extras.index')->with('message','Extra updated successfully!');
    }

    public function destroy($id)
    {
        Extra::find($id)->delete()->with('message','Extra deleted successfully!');
    }
}
