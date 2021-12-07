@extends('layouts.app')

@section('content')

    <div class="col-6 py-3 bg-light border p-5">
        <form action="{{ route('clients.store') }}" method="POST" id="albumForm" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

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
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email">
            </div>

            <div class="form group py-2">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form group py-2">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" name="phone">
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

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>

    </div>
@endsection
