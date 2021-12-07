<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Extra;
use App\Models\Limo;
use App\Models\Payment;
use App\Models\Service;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {

        $today_query = (Enquiry::whereDate('created_at', Carbon::today())->get());
        $current_time = Carbon::now();

        $enquiries = Enquiry::all();
        $limos = Limo::all();
        $extras = Extra::all();
        $services = Service::all();
        $payments = Payment::all();

        return view('admin.dashboard', compact('enquiries', 'limos', 'services', 'payments', 'extras', 'today_query','current_time'));
    }
}
