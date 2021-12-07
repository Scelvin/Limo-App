<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Enquiry;
use App\Models\EnquiryExtra;
use App\Models\Extra;
use App\Models\Limo;
use App\Models\Payment;
use App\Models\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $limos = Limo::all();
        $extras = Extra::all();
        $services = Service::all();
        $payments = Payment::all();

        return view('user.index', compact('limos', 'services', 'extras', 'payments'));
    }

    public function create($id)
    {
        $limos = Limo::find($id);
        $extras = Extra::all();
        $services = Service::find($id);

        return response()->json([
            'limo' => $limos,
            'services' => $services,
            'extras' => $extras,
        ]);
    }

    public function fetchService($id, $service_id)
    {
        $limos = Limo::find($id);
        $extras = Extra::all();
        $services = Service::find($service_id);

        return response()->json([
            'limo' => $limos,
            'services' => $services,
            'extras' => $extras,
        ]);
    }

    public function store(Request $request)
    {
        // if ($request->session()->exists('view')) {
        //     // 'view' is exist in session
        //     $view = $request->session()->get('view');
        // }

        //Note: Session discards previous session and creates new.

        Session::put('view', $request->all());
        $view = Session::get('view');

        $limo_contents = Limo::find($view['limo_id']);
        $service = Service::find($view['service_id']);
        $enquiry = $view["dateTime"];

        return view('user.show', compact('view','limo_contents','service','enquiry'));
    }

    public function storeEnquiry(Request $request)
    {
        $view = Session::get('view');
        // dd($view);

        $client = new Client();
        $client->first_name = $view["first_name"];
        $client->last_name = $view["last_name"];
        $client->phone = $view["phone"];
        $client->company = $view["company"];
        $client->address = $view["address"];
        $client->city = $view["city"];
        $client->state = $view["state"];
        $client->zip = $view["zip"];
        $client->country = $view["country"];
        $client->save();

        $enquiry = new Enquiry();
        $enquiry->datetime = $view["dateTime"];
        $enquiry->location = $view["location"];
        $enquiry->limo_id = $view["limo_id"];
        $enquiry->service_id = $view["service_id"];
        $enquiry->client_id = $client->id;
        $enquiry->passengers = $view["passengers"];
        $enquiry->reason = $view["reason"];
        $enquiry->payment_id = $view["payment_id"];
        $enquiry->airline = $view["airline"];
        $enquiry->flight_number = $view["flight_number"];
        $enquiry->flight_time = $view["flight_time"];
        $enquiry->terminal = $view["terminal"];
        $enquiry->save();

        foreach ($view["extras"] as $extra) {

        $enquiry_extra = new EnquiryExtra();
        $enquiry_extra->extra_id = $extra;
        $enquiry_extra->enquiry_id = $enquiry->id;
        $enquiry_extra->save();
        }

        return route('successEnquiry');
    }

    public function successEnquiry()
    {
        // Forget session
        session()->forget('view');
        
        //Check if session exists
        // dd(session()->has('view'));
        return view('user.confirmation');
        // return redirect()->route('successEnquiry')->with('message','Your enquiry has been sent successfully!');
    }
}
