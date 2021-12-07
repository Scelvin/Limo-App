@extends('layouts.app')

@section('content')
    <div class="py-3 border">

        <div class="card mx-5 px-3 bg-light text-start">

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle w-25" type="button" id="dropdownMenuBtn"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Book a new Limo
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ route('home.index') }}">Step 1 - Select Limo</a></li>
                    <li><a class="dropdown-item disabled" href="{{ route('home.create') }}">Step 2 - Enquiry
                            Details</a></li>
                    <li><a class="dropdown-item disabled" href="#">Step 3 - Confirmation</a></li>
                </ul>
            </div>
            <div class="col-auto py-4 py-md-5 text-center" id="reserve-limo">
                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <div>
                    <a href="{{ route('home.index') }}" class="btn btn-md btn-warning">START OVER</a>
                </div>
            </div>
        </div>
    </div>
@endsection
