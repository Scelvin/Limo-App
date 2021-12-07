@extends('layouts.app')

@section('content')

    <div class="col py-3 bg-light border p-5">
        <form action="{{ route('enquiries.store') }}" method="POST" id="albumForm" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <div class="row">

                <div class="col-5 border ">
                    <div class="form group py-2">
                        <label for="datetime">Date & time:</label>
                        <input type="datetime-local" id="datetime" name="datetime">
                    </div>

                    <div class="form group py-2">
                        <label for="location">Pick-up and drop-off location:</label>
                        <input type="text" class="form-control" name="location">
                    </div>

                    <div class="form group py-2">
                        <label for="limo">Limo:</label>
                        <select name="limo_id" id="limo">
                            <option value="">--- Choose ---</option>
                            @foreach ($limos as $limo)
                                <option value="{{ $limo->id }}">{{ $limo->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form group py-2">
                        <label for="service">Service:</label>
                        <select name="service_id" id="">
                            <option value="">--- Choose ---</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form group py-2">
                        <label for="passengers">Passengers:</label>
                        <input type="number" class="form-control" name="passengers" id="" max="{{ $limo->passengers }}">
                    </div>

                    <div class="form group py-2">
                        <label for="reason">Reason for hire:</label>
                        <select name="reason" id="">
                            <option value="">--- Choose ---</option>
                            <option value="birthday">Birthday</option>
                            <option value="cruise">Cruise</option>
                            <option value="dinner">Dinner</option>
                            <option value="sightseeing">Sightseeing</option>
                        </select>
                    </div>

                    <div class="form group py-2">
                        <label for="extras">Extras:</label>
                        <input type="text" class="form-control" name="extras">
                    </div>

                    <div class="form group py-2">
                        <label for="payment">Payment:</label>
                        <select name="payment_id" id="">
                            <option value="">--- Choose ---</option>
                            @foreach ($payments as $payment)
                                <option value="{{ $payment->id }}">{{ $payment->type }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form group py-2">
                        <label for="status">Status:</label>
                        <select name="status" id="">
                            <option value="">--- Choose ---</option>
                            <option value="cancelled">Cancelled</option>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                        </select>
                    </div>
                </div>

                <div class="col-5 border">
                    <div class="form group py-2">
                        <label for="title">Title:</label>
                        <select name="title" id="">
                            <option value="">--- Choose ---</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                        </select>
                    </div>

                    <div class="form group py-2">
                        <label for="first_name">First name:</label>
                        <input type="text" class="form-control" name="first_name">
                    </div>

                    <div class="form group py-2">
                        <label for="last_name">Last name:</label>
                        <input type="text" class="form-control" name="last_name">
                    </div>

                    <div class="form group py-2">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" name="phone">
                    </div>

                    <div class="form group py-2">
                        <label for="company">Company:</label>
                        <input type="text" class="form-control" name="company">
                    </div>

                    <div class="form group py-2">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address">
                    </div>

                    <div class="form group py-2">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" name="city">
                    </div>

                    <div class="form group py-2">
                        <label for="state">State:</label>
                        <input type="text" class="form-control" name="state">
                    </div>

                    <div class="form group py-2">
                        <label for="zip">Zip:</label>
                        <input type="text" class="form-control" name="zip">
                    </div>

                    <div class="form group py-2">
                        <label for="country">Country:</label>
                        <select name="country" id="">
                            <option value="">--- Choose ---</option>
                            <option value="Norway">Norway</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="India">India</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
        </form>
    </div>

@endsection
