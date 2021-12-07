@extends('layouts.app')

@section('content')
    <div class="px-4 py-3">

        <div class="bg-light card col-9 px-3 text-start">

            <div class="bg-black border dropdown mt-2 px-3 py-2">
                <button class="btn btn-secondary dropdown-toggle w-25" type="button" id="dropdownMenuBtn"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Book a new Limo
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ route('home.index') }}">Step 1 - Select Limo</a></li>
                    <li><a class="dropdown-item disabled" href="{{ route('home.create') }}">Step 2 - Enquiry Details</a></li>
                    <li><a class="dropdown-item disabled" href="#">Step 3 - Confirmation</a></li>
                </ul>
            </div>
            <div class="py-3 mx-3">

                <div class="card px-4 py-2 text-start">

                    {{-- Enquiry form inputs --}}
                    <h5 class="fw-bold">YOUR ENQUIRY</h5>
                    <table class="table">
                        <th>
                        </th>
                        <tr>
                            <td>
                                <label for="">{{ $limo_contents->name }} - {{ $service->name }} - {{ $enquiry }}</label>
                            </td>
                            <td>
                                €180.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Extra price
                            </td>
                            <td>
                                €20.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Subtotal
                            </td>
                            <td>
                                €200.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tax
                            </td>
                            <td>
                                €20.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Total
                            </td>
                            <td>
                                €220.00
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card m mt-4 px-4 py-2 text-start">


                    {{-- Enquiry details form inputs --}}
                    <table>
                        <th>
                            <h5 class="fw-bold">ENQUIRY DETAILS</h5>
                        </th>
                        <tr>
                            <td>
                                <label for="">Location</label><br>
                                <label for="" class="fw-bold">{{ $view['location'] }}</label>
                            </td>
                            <td>
                                <label for="">Reason for hire</label><br>
                                <label for="" class="fw-bold">{{ $view['reason'] }}</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Passengers</label><br>
                                <label for="" class="fw-bold">{{ $view['passengers'] }}</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Payment Method</label><br>
                                <label for="" class="fw-bold">{{ $view['payment_id'] }}</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">First name</label><br>
                                <label for="" class="fw-bold">{{ $view['first_name'] }}</label>
                            </td>
                            <td>
                                <label for="">Last name</label><br>
                                <label for="" class="fw-bold">{{ $view['last_name'] }}</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Phone</label><br>
                                <label for="" class="fw-bold">{{ $view['phone'] }}</label>
                            </td>
                            {{-- <td>
            <label for="">Email</label><br>
            <label for="" class="fw-bold">{{ $view['email'] }}</label>
        </td> --}}
                        </tr>
                        <tr>
                            <td>
                                <label for="">Company</label><br>
                                <label for="" class="fw-bold">{{ $view['company'] }}</label>
                            </td>
                            <td>
                                <label for="">Address</label><br>
                                <label for="" class="fw-bold">{{ $view['address'] }}</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">City</label><br>
                                <label for="" class="fw-bold">{{ $view['city'] }}</label>
                            </td>
                            <td>
                                <label for="">State</label><br>
                                <label for="" class="fw-bold">{{ $view['state'] }}</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Zip</label><br>
                                <label for="" class="fw-bold">{{ $view['zip'] }}</label>
                            </td>
                            <td>
                                <label for="">Country</label><br>
                                <label for="" class="fw-bold">{{ $view['country'] }}</label>
                            </td>
                        </tr>

                        {{-- Flight inputs --}}
                        <tbody>

                            <tr>
                                <td>
                                    <label for="">Arrival airline company</label><br>
                                    <label for="" class="fw-bold">{{ $view['airline'] }}</label>
                                </td>
                                <td>
                                    <label for="">Arrival flight number</label><br>
                                    <label for="" class="fw-bold">{{ $view['flight_number'] }}</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Flight arrival time</label><br>
                                    <label for="" class="fw-bold">{{ $view['flight_time'] }}</label>
                                </td>
                                <td>
                                    <label for="">Terminal / Gate</label><br>
                                    <label for="" class="fw-bold">{{ $view['terminal'] }}</label>
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
            <div class="m-2 text-center text-uppercase">
                <a href="{{ route('home.index') }}" class="btn btn-sm btn-secondary">Back</a>
                <a href="{{ route('storeEnquiry') }}" class="btn btn-sm btn-warning">Confirm</a>
            </div>
        </div>
    </div>
@endsection
