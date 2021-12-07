@extends('layouts.app')

@section('content')

    <div class="col-6 py-3 bg-light border p-5">
        <form action="{{ route('extras.store') }}" method="POST" id="albumForm" enctype="multipart/form-data">
            @csrf
            <div class="form group">
                <label for="name">Extra name:</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form group py-2">
                <label for="price">Price:</label>
                <input type="number" class="form-control" name="price">
            </div>

            <div class="form group py-2">
                <label for="price_per_person">Price per person:</label>
                <label>
                    <input type="hidden" name="price_per_person[]" value="0">
                    <input type="checkbox" name="price_per_person[]" value="1">
                </label>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
@endsection
