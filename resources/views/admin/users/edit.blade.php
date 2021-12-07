@extends('layouts.app')

@section('content')

    <div class="col-6 py-3 bg-light border p-5">
        <form action="{{ route('users.store') }}" method="POST" id="albumForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
            </div>

            <div class="form group py-2">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" value="{{ $user->password }}">
            </div>

            <div class="form group py-2">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>

            <div class="form group py-2">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" name="phone" value="{{ $user->phone }}">
            </div>

            <div class="form group py-2">
                <label for="status">Status:</label>
                <select name="status" id="status">
                    <option value="active">Active</option>
                    <option value="not-active">Not Active</option>
                </select>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
@endsection
