<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Enquiry;
use App\Models\Limo;
use App\Models\Payment;
use App\Models\Service;

use App\Http\Requests\StoreEnquiryRequest;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::all();
        $clients = Client::all();
        $limos = Limo::all();
        $services = Service::all();
        return view('admin.enquiries.index', compact('enquiries','clients','limos','services'));
    }

    public function create()
    {
        $limos = Limo::all();
        $services = Service::all();
        $payments = Payment::all();
        return view('admin.enquiries.create', compact('limos', 'services', 'payments'))
            ->with('message', 'Successfully added!');
    }

    public function store(Request $request)
    {
        $client = Client::create([
            'title' => $request->input('title'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'company' => $request->input('company'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'country' => $request->input('country'),
        ]);

        $enquiry = Enquiry::create([
            'datetime' => $request->input('datetime'),
            'location' => $request->input('location'),
            'limo_id' => $request->input('limo_id'),
            'client_id' => $client->id,
            'service_id' => $request->input('service_id'),
            'passengers' => $request->input('passengers'),
            'reason' => $request->input('reason'),
            'payment_id' => $request->input('payment_id'),
            'status' => $request->input('status'),
        ]);

        return back()->with('message', 'Enquiry created successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $enquiries = Enquiry::find($id);
        $limos = Limo::find($id);
        $client = Client::find($id);
        $services = Service::find($id);
        return view('admin.enquiries.edit', compact('limos', 'services','client'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
