@extends('layouts.app')

@section('content')
    <div class="py-3 bg-light border">
        <div class="card text-start">

            <div class="row">
                <div class="col-3 border">
                    <img src="{{ asset('images/cadillac.jpg') }}" alt="" class="mt-4">
                </div>
                <div class="col-5 border">
                    <h4>Cadillac Escalade Limousine</h4>
                    <p class="py-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis nunc
                        mollis, elementum velit in, vulputate lorem. Etiam laoreet lorem sed nisi
                        vestibulum varius. Suspendisse posuere magna nec justo commodo interdum. Nulla
                        volutpat massa vel ante sodales luctus.
                    </p>
                </div>
                <div class="col-3 py-2">
                    <form action="" method="" enctype="multipart/form-data">

                        <div class="form group">
                            <label for="service" class="fw-bold">Service:</label>
                            <select id="service" name="service" class="text-center">
                                <option value="">--- Choose ---</option>
                                <option value="airporttocity">Airport to City Center</option>
                                <option value="daycity">Day city tour - 4 hours</option>
                                <option value="nightcity">Night city tour - 4 hours</option>
                            </select>
                        </div>

                        <div class="form group py-3">
                            <label class="fw-bold">Price:</label>

                        </div>

                        <div class="form group py-2">
                            <button type="submit" class="btn btn-sm btn-warning">Reserve</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
