@extends('layouts.app')

@section('content')

    <div class="py-3 bg-light border">
        <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm">+Add Client</a>
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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Enquiries</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($clients as $client)
                    <tr>
                        <td>{{ $client->first_name .' '. $client->last_name}}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->enquriy }}</td>
                        <td>{{ $client->status }}</td>
                        <td>
                            <a href="{{ route('clients.edit', $client) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-primary">Delete</a>
                        </td>
                    </tr>
                @empty
                    <td colspan="4">No clients exist! Please add a client.</td>
                    <br/>
                @endforelse
            </tbody>
        </table>

    </div>

@endsection
