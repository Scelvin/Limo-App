<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClientRequest;

class ClientController extends Controller
{
    public function index()
    {
    $clients = Client::all();
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(StoreClientRequest $request)
    {
        $client = Client::create([
            'title' => $request->input('title'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'company' => $request->input('company'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'country' => $request->input('country'),
        ]);

        return redirect()->route('clients.index')->with('message','Client created successfully!');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        $total_enquiry = Enquiry::where('client_id', $client->id)->get();
        $last_enquiry = Enquiry::where('client_id', $client->id)->pluck('created_at');
//        dd($last_enquiry->format('Y-m-d'));

        return view('admin.clients.edit', compact('client','last_enquiry','total_enquiry'));
    }

    public function update(UpdateClientRequest $request, $id)
    {
        $client = Client::find($id);

        $client->update([
            'title' => $request->input('title'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'company' => $request->input('company'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'country' => $request->input('country'),
        ]);

        return redirect()->route('clients.index')->with('message','Client updated successfully!');
    }

    public function destroy($id)
    {
        Client::find($id)->delete()->with('message','Client deleted successfully!');
    }
}
