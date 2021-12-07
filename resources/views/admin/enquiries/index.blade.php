@extends('layouts.app')

@section('content')

    <div class="py-3 bg-light border">
        <a href="{{ route('enquiries.create') }}" class="btn btn-primary btn-sm">+Add Enquiry</a>
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
                    <th scope="col">Client</th>
                    <th scope="col">Limo</th>
                    <th scope="col">Service</th>
                    <th scope="col">Date & Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($enquiries as $enquiry)
                    <tr>
                        <td>{{ $enquiry->client->first_name .' '. $enquiry->client->last_name}}</td>
                        <td>{{ $enquiry->limo->name }}</td>
                        <td>{{ $enquiry->service->name }}</td>
                        <td>{{ $enquiry->datetime }}</td>
                        <td>{{ $enquiry->status }}</td>
                        <td>
                            <a href="{{ route('enquiries.edit', $enquiry) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-primary">Delete</a>
                        </td>
                    </tr>
                @empty
                    <td colspan="4">No enquiries exist! Please add a enquiry.</td>
                    <br/>
                @endforelse
            </tbody>
        </table>

    </div>

@endsection
