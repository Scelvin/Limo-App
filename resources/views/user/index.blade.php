@extends('layouts.app')

@section('content')
    <div class="py-3 bg-light border">

        <div class="card mx-5 text-start px-3">

            <div class="">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle w-25" type="button" id="dropdownMenuBtn"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Book a new Limo
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('home.index') }}">Step 1 - Select Limo</a></li>
                        <li><a class="dropdown-item disabled" href="{{ route('home.create') }}">Step 2 - Enquiry
                                Details</a></li>
                        <li><a class="dropdown-item disabled" href="#">Step 3 - Confirmation</a></li>
                    </ul>
                </div>
            </div>
            <div class="row" id="reserve-limo">
                <table class="table">
                    <th>
                        @foreach ($limos as $limo)
                    </th>
                    <tr>
                        <td>
                            <img src="/images/{{ $limo->image_path }}" alt="" class="mt-4" height="150"
                                width="250"><br>
                            <p class="text-center">{{ $limo->passengers }} - {{ $limo->luggage }}</p>
                        </td>
                        <td>
                            <div class="col-10  py-2">
                                <h4>{{ $limo->name }}</h4>
                                <p class="py-2">
                                    {{ $limo->description }}
                                </p>
                            </div>
                        </td>
                        <td>
                            <label for="service" class="fw-bold">Service:</label>
                            <select id="service-type" name="" onchange="setServiceId(this)">
                                <option value="">--- Choose ---</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                            <div class="form group py-2">
                                <button id="submitBtn" type="submit" class="btn btn-sm btn-primary"
                                    onclick="fetchLimo({{ $limo->id }})">Reserve
                                </button>
                            </div>
                        </td>
                        @endforeach
                        <input type="hidden" name="limo-service-id" id="limo-service-id">
                    </tr>

                </table>
            </div>
        </div>
    </div>
    @include('user.create')

@endsection

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js'></script>
<script>
    // $('#extras').change(function check() {

    //     $('#extras').each(function(idx, el) {

    //         if ($(el).is(':checked')) {
    //             var selectedValue = $(el).val();
    //             console.log(selectedValue);
    //         }
    //     });

    // });

    function setExtraAmount(amount) {
        console.log('hi');
        $("#extras").html(response.extras.price);
    }

    function setServiceId(service) {
        // console.log(service.value);
        $('#limo-service-id').val(service.value);
    }

    function fetchLimo($id) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var id = $id;

        var service_type = $("#limo-service-id").val();

        // $.ajax({
        //     type: "get",
        //     url: "home/" + id + $("#service-type").val(),
        //     data: {},
        //     dataType: "json",
        //     success: function(response) {
        //         console.log(response);
        //         console.log(response.limo.name);
        //         console.log(response.limo.name);

        // $('#limo-name').html(response.data.name);
        // $('#limo-description').html(response.data.description);
        // $('#limo-image').prop("src", '/images/' + response.data.image_path);
        // $('#service-name').html(response.data.name);
        // $('#service-price').html(response.data.price);
        //     }
        // });

        $.ajax({
            type: "get",
            url: "home/services/" + id + '/' + service_type,
            data: {},
            dataType: "json",
            success: function(response) {
                //Enquiry dropdown
                $('#reserve-limo').hide();
                $('#enquiry-form').removeClass("invisible").addClass("visible");

                // localStorage.setItem("limo_id",response.limo.id);
                $("#limo_id").val(response.limo.id);
                $("#service_id").val(response.services.id);
                $("#subtotal").html(response.services.price);
                // console.log(response.extras);


                //Enquiry limo details
                $('#limo-name').html(response.limo.name);
                $('#limo-description').html(response.limo.description);
                $('#limo-passenger-luggage').html(response.limo.passengers + ' - ' + response.limo.luggage);
                $('#limo-image').prop("src", '/images/' + response.limo.image_path);
                $('#service-name-id').html(response.services.name + ' (' + response.services.price + ')');

                $('#limo-name').html(response.limo.name);

            }
        });
    }
</script>
