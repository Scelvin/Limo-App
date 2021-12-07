@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-7 col-lg-5 m-3 p-3 border bg-light">

            <h4 class="mb-3">Edit Service Information:</h4>
            <form class="needs-validation" novalidate action="{{ route('services.update', $service->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form group">
                    <label for="name">Service name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $service->name }}">
                </div>

                <div class="form group py-2">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" name="price" value="{{ $service->price }}">
                </div>

                <div class="text-center col-md 2">
                    <button class="btn btn-warning" type="submit">Save</button>
                </div>
        </div>
        </form>

    </div>
    </div>
@endsection
