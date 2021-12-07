@extends('layouts.app')

@section('content')

    <div class="py-3 bg-light border">
        <a href="{{ route('limos.create') }}" class="btn btn-primary btn-sm">+Add Limo</a>
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
                    <th scope="col">Thumb</th>
                    <th scope="col">Limo</th>
                    <th scope="col">Passengers</th>
                    <th scope="col">Luggage</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($limos as $limo)
                    <tr>
                        <td><img src="/images/{{ $limo->image_path }}" alt="" class="mt-4" width="250"
                                height="150"></td>
                        <td>{{ $limo->name }}</td>
                        <td>{{ $limo->passengers }}</td>
                        <td>{{ $limo->luggage }}</td>
                        <td>{{ $limo->status }}</td>
                        <td>
                            <a href="{{ route('limos.edit', $limo) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-primary">Delete</a>
                        </td>
                    </tr>
                @empty
                    <td colspan="4">No limos exist! Please add a limo.</td>
                    <br />
                @endforelse
            </tbody>
        </table>

    </div>

@endsection
