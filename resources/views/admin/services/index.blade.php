@extends('layouts.app')

@section('content')

    <div class="py-3 bg-light border">
        <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm">+Add Service</a>
        <form action="#" method="GET">
            <label>
                <input type="text" name="search" placeholder="Search"
                    class="bg-transparent placeholder-black font-semisolid text-sm" value="{{ request('search') }}">
            </label>
        </form>

        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Service Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->price }}</td>
                        <td>
                            <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-primary">Delete</a>
                        </td>
                    </tr>
                @empty
                    <td colspan="4">No services exist! Please add a service.</td>
                    <br />
                @endforelse
            </tbody>
        </table>


    </div>

@endsection
