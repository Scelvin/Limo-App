@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row menus">
            <div class="menu col-2 py-2 border border-4 bg-light">
                <ul>
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('enquiries.index') }}">Enquires</a></li>
                    <li><a href="{{ route('limos.index') }}">Limos</a></li>
                    <li><a href="{{ route('clients.index') }}">Clients</a></li>
                    <li><a href="{{ route('services.index') }}">Services</a></li>
                    <li><a href="{{ route('extras.index') }}">Extras</a></li>
                    <li><a href="#">Options</a></li>
                    <li><a href="{{ route('users.index') }}">Users</a></li>
                </ul>
            </div>

            <div class="menu col-8 mx-auto border ">
                @yield('dashboard_content')

                <div class="py-2 px-3">
                    <!-- Total count of enquiries/reservations -->
                    <div class="row align-items-start border bg-light">
                        <div class="col">
                            <h3>{{ $today_query->count() }}</h3>
                            <p>enquiries today</p>
                        </div>
                        <div class="col">
                            <h3>{{ $enquiries->count() }}</h3>
                            <p>reservations today</p>
                        </div>
                        <div class="col">
                            <h3>{{ $enquiries->count() }}</h3>
                            <p>total reservations</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row justify-content-between row">

                        <div class="col-4 py-2 px-3">
                            <div class="card">
                                <h5 class="card-header">Latest enquiries</h5>
                                <div class="card-body">
                                    @foreach ($enquiries as $enquiry)
                                        <h6 class="card-title">
                                            {{ $enquiry->client->first_name . ' ' . $enquiry->client->last_name }}</h6>
                                        <p class="card-text">{{ $enquiry->limo->name }}</p>
                                        <p class="card-text">{{ $enquiry->datetime }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-4 py-2 px-3">
                            <div class="card">
                                <h5 class="card-header">Reservations Today</h5>
                                <div class="card-body">
                                    @foreach ($enquiries as $enquiry)
                                        <h6 class="card-title">
                                            {{ $enquiry->client->first_name . ' ' . $enquiry->client->last_name }}</h6>
                                        <p class="card-text">{{ $enquiry->limo->name }}</p>
                                        <p class="card-text">{{ $enquiry->service->name }}</p>
                                        <p class="card-text">{{ $enquiry->datetime }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-3 py-2 px-3">
                            <div class="card">
                                <h5 class="card-header">Quick Links</h5>
                                <div class="card-body">
                                    <a href="{{ route('enquiries.index') }}">View enquiries</a>
                                    <a href="">Reservations today</a>
                                    <a href="{{ route('enquiries.create') }}">Add enquiry</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col col-auto">
                            <h3>{{ $current_time->format('h:i:s A') }}</h3>
                        </div>
                        <div class="col col-md-auto">
                            <h4>{{ $current_time->format('l') }}</h4>
                            <h6>{{ $current_time->toFormattedDateString() }}</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
