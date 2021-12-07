@extends('layouts.app')

@section('content')

    <div class="col-6 py-3 bg-light border p-5">
        <form action="{{ route('clients.store') }}" method="POST" id="albumForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form group py-2">
                <label for="total-enquiry">Total Enquiries:</label>
            </div>

            <div class="form group py-2">
                <label for="last-enquiry">Last enquiry:</label>
            </div>
            
            <div class="form group py-2">
                <label for="title">Title:</label>
                <select name="title" id="">
                    <option value="">--- Choose ---</option>
                    <option value="mr">Mr</option>
                    <option value="mrs">Mrs</option>
                    <option value="ms">Ms</option>
                </select>
            </div>
            
            <div class="form group py-2">
                <label for="first_name">First name:</label>
                <input type="text" class="form-control" name="first_name" value="{{ $client->first_name }}">
            </div>

            <div class="form group py-2">
                <label for="last_name">Last name:</label>
                <input type="text" class="form-control" name="last_name" value="{{ $client->last_name }}">
            </div>

            <div class="form group py-2">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{ $client->email }}">
            </div>

            <div class="form group py-2">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" value="{{ $client->password }}">
            </div>

            <div class="form group py-2">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" name="phone" value="{{ $client->phone }}">
            </div>
            
            <div class="form group py-2">
                <label for="company">Company:</label>
                <input type="text" class="form-control" name="company" value="{{ $client->company }}">
            </div>
            
            <div class="form group py-2">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" value="{{ $client->address }}">
            </div>
            
            <div class="form group py-2">
                <label for="city">City:</label>
                <input type="text" class="form-control" name="city" value="{{ $client->city }}">
            </div>
            
            <div class="form group py-2">
                <label for="state">State:</label>
                <input type="text" class="form-control" name="state" value="{{ $client->state }}">
            </div>
            
            <div class="form group py-2">
                <label for="zip">Zip:</label>
                <input type="text" class="form-control" name="zip" value="{{ $client->zip }}">
            </div>
            
            <div class="form group py-2">
                <label for="country">Country:</label>
                <select name="country" id="">
                    <option value="">--- Choose ---</option>
                    <option value="usa">United States of America</option>
                    <option value="uk">United Kingdom</option>
                    <option value="india">India</option>
                </select>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
@endsection
