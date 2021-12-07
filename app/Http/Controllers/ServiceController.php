<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use Illuminate\Http\Request;

use App\Models\Service;


class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(StoreServiceRequest $request)
    {
        $service = Service::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('services.index')->with('message','Service created successfully!');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('services.index')->with('message','Service updated successfully!');
    }

    public function destroy($id)
    {
        Service::find($id)->delete()->with('message','Service deleted successfully!');
    }
}
