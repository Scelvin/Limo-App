@extends('layouts.app')

@section('content')
    <div class="container">

        <h4 class="mb-3">Edit Limo Information:</h4>
        <form class="needs-validation" novalidate action="{{ route('limos.update', $limo->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="name">Limo:</label>
                    <input type="text" class="form-control" name="name" value="{{ $limo->name }}">
                </div>

                <div class="col-sm-6">
                    <label for="image_path">Image:</label>
                    <img src="/images/{{ $limo->image_path }}" class="card-img-top" alt="..." width="200"
                         height="250">
                    <input type="file" id="" name="image_path" value="{{ $limo->image_path }}"><br><br>

                </div>

                <div class="col-12">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description" value="{{ $limo->description }}">
                </div>

                <div class="col-12">
                    <label for="passengers" class="form-label">Passengers:</label>
                    <input type="number" class="form-control" name="passengers" value="{{ $limo->passengers }}">
                </div>

                <div class="col-12">
                    <label for="luggage" class="form-label">Luggage:</label>
                    <input type="number" class="form-control" name="luggage" value="{{ $limo->luggage }}">
                </div>

                <div class="col-12">
                    <label for="extras" class="form-label">Extras:</label>
                    @foreach ($extras as $extra)
                        <input type="checkbox" name="extras" id="">
                        <label for="extras">{{ $extra->name }}</label>
                    @endforeach
                </div>

                <div class="col-12">
                    <label for="extras" class="form-label">Services:</label><br>
                    @foreach ($services as $service)
                        <table>
                            <th>
                                <label for="sname" class="form-label">Name:</label>
                                <label for="price" class="form-label">Price:</label>
                            </th>
                            <td>
                                <input type="text" class="form-control" name="{{ $service->id }}"
                                       value="{{ $service->name }}">
                            </td>
                            <td>
                                <input type="number" class="form-control" name="price"
                                       value="{{ $service->price }}">
                            </td>
                        </table>
                    @endforeach
                </div>

                <div class="text-center col-md 2">
                    <button class="btn btn-warning" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
