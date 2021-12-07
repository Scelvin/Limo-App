@extends('layouts.app')

@section('content')

    <div class="col-6 py-3 bg-light border p-5">
        <form action="{{ route('limos.store') }}" method="POST" id="albumForm" enctype="multipart/form-data">
            @csrf
            <div class="form group">
                <label for="name">Limo:</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form group py-2">
                <label for="myfile">Select an image:</label>
                <input type="file" name="image_path"><br><br>
            </div>

            <div class="form group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" rows="4" cols="50"></textarea>
            </div>

            <div class="form group py-2">
                <label for="passengers">Passengers:</label>
                <input type="number" class="form-control" name="passengers">
            </div>

            <div class="form group py-2">
                <label for="luggage">Luggage:</label>
                <input type="number" class="form-control" name="luggage">
            </div>

            <div class="form group py-2">
                <label for="extras">Extras:</label>
                <label><input type="checkbox" name="extras[]" value="airport-pick">Airport pick-up sign</label>
                <label><input type="checkbox" name="extras[]" value="champagne">Champagne</label>
                <label><input type="checkbox" name="extras[]" value="flowers">Flowers</label>
                <label><input type="checkbox" name="extras[]" value="photographer">Photographer</label>
                <label><input type="checkbox" name="extras[]" value="tour-guide">Tour guide</label>
            </div>

            <div class="row py-3 border">
                <div class="form group py-2 col-3">
                    <label for="service">Services:</label><br>
                </div>

                <div class="col-3">
                    <label for="Name">Name:</label>
                    <input type="text" class="form-control" name="sname">
                </div>

                <div class="col-3">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" name="price">
                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
@endsection
