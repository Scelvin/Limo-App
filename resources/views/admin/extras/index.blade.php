@extends('layouts.app')

@section('content')

    <div class="py-3 bg-light border">
        <a href="{{ route('extras.create') }}" class="btn btn-primary btn-sm">+Add Extras</a>
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
                    <th scope="col">Extra Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($extras as $extra)
                    <tr>
                        <td>{{ $extra->name }}</td>
                        <td>{{ $extra->price }}</td>
                        <td>
                            <a href="{{ route('extras.edit', $extra) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-primary">Delete</a>
                        </td>
                    </tr>
                @empty
                    <td colspan="4">No extras exist! Please add a extra.</td>
                    <br />
                @endforelse
            </tbody>
        </table>


    </div>

@endsection
