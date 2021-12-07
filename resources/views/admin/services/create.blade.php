@extends('layouts.app')

@section('content')

    <div class="col-6 py-3 bg-light border p-5">
        <form action="{{ route('services.store') }}" method="POST" id="albumForm" enctype="multipart/form-data">
            @csrf
            <div class="form group">
                <label for="name">Service name:</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form group py-2">
                <label for="price">Price:</label>
                <input type="number" class="form-control" name="price">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
                <button type="submit" class="btn btn-primary btn-sm">Add</button>
            </div>
        </form>

    </div>
@endsection
