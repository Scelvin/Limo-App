    <div class="py-3 mx-5 ">
        <div class="card text-start">
            <form action="{{ route('home.store') }}" method="POST" id="enquiry-form" class="invisible">
                @csrf
                <div class="row py-3 px-4">
                    <div class="row">
                        <div class="col-3">
                            <h4 id="limo-name"></h4>
                            <input type="hidden" name="limo_id" id="limo_id">

                            <img src="" alt="" id="limo-image" width="250" height="150">
                            <p id="limo-passenger-luggage" class="text-center"></p>
                        </div>

                        <div class="col-5">
                            <div class="row">
                                <h5 id="service-name-id"></h5>
                                <input type="hidden" name="service_id" id="service_id">
                            </div>
                            <div class="row">
                                <p id="limo-description"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row py-3 px-4">
                    <!-- Enquiry details -->
                    <div class="bg-light border col-5 p-2">
                        <h5 class="fw-bold">ENQUIRY DETAILS</h5>
                        <div class="form group py-3">
                            <label for="dateTime" class="fw-bold">Date and Time:</label>
                            <input type="datetime-local" id="dateTime" name="dateTime" class="form-control">

                            @error('dateTime')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form group py-3">
                            <label for="location" class="fw-bold">Location:</label><br>
                            <input type="text" id="location" name="location" class="form-control">

                            @error('location')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="bg-light border col-5 mx-3 p-2">
                        <div class="form group py-5">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-5">
                                        <label class="fw-bold">Reason for hire:</label><br>
                                        <select name="reason" id="" class="form-control">
                                            <option value="">--- Choose ---</option>
                                            <option value="Birthday">Birthday</option>
                                            <option value="Anniversary">Anniversary</option>
                                            <option value="Sightseeing">Sightseeing</option>
                                        </select>

                                        @error('reason')
                                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-5">
                                        <label class="fw-bold">Passengers</label>
                                        <input type="number" name="passengers" id="" class="form-control">

                                        @error('passengers')
                                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form group py-4">
                                <label class="fw-bold">Notes</label><br>
                                <textarea name="notes" id="" cols="50" rows="3" class="form-control"></textarea>
                            </div>
                        </div>

                    </div>
                    <!-- Enquiry details end-->
                </div>

                <div class="col py-3 px-4">
                    <div class="row">

                        <!-- Personal details -->
                        <div class="col-5 bg-light border py-3 px-3">
                            <h5 class="fw-bold">PERSONAL DETAILS</h5>

                            <div class="form group py-2">
                                <label for="first_name" class="fw-bold">First name:</label>
                                <input type="text" class="form-control" name="first_name">

                                @error('first_name')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form group py-2">
                                <label for="last_name" class="fw-bold">Last name:</label>
                                <input type="text" class="form-control" name="last_name">

                                @error('last_name')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form group py-2">
                                <label for="phone" class="fw-bold">Phone:</label>
                                <input type="number" class="form-control" name="phone">
                                @error('phone')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form group py-2">
                                <label for="company" class="fw-bold">Company:</label>
                                <input type="text" class="form-control" name="company">
                                @error('company')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form group py-2">
                                <label for="address" class="fw-bold">Address:</label>
                                <input type="text" class="form-control" name="address">
                                @error('address')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form group py-2">
                                <label for="city" class="fw-bold">City:</label>
                                <input type="text" class="form-control" name="city">
                                @error('city')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form group py-2">
                                <label for="state" class="fw-bold">State:</label>
                                <input type="text" class="form-control" name="state">
                                @error('state')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form group py-2">
                                <label for="zip" class="fw-bold">Zip:</label>
                                <input type="text" class="form-control" name="zip">
                                @error('zip')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form group py-2">
                                <label for="country" class="fw-bold">Country:</label>
                                <select name="country" id="" class="form-control">
                                    <option value="">--- Choose ---</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="India">India</option>
                                </select>
                                @error('country')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="py-2">
                                <label for="payment" class="fw-bold">Payment Method:</label><br>
                                <select name="payment_id" id="" class="form-control">
                                    <option value="">--- Choose ---</option>
                                    @foreach ($payments as $payment)
                                        <option value="{{ $payment->id }}">{{ $payment->type }}</option>
                                    @endforeach
                                </select>
                                @error('payment')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Captcha -->
                            <div class="py-2">
                                <label for="" class="fw-bold">Captcha:</label><br>
                            </div>

                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">I have read and accept your</label> <a href="">Terms and conditions.</a>
                            </div>
                        </div>
                        <!-- Personal details end-->

                        <div class="col-6 px-3">

                            <!-- Flight details -->
                            <div class="row-5 bg-light border py-3 px-3">
                                <h5 class="fw-bold">FLIGHT DETAILS</h5>
                                <p>If you choose airport transfer service, please enter your flight details below.</p>

                                <div class="form-group py-2">
                                    <label class="fw-bold">Airline</label><br>
                                    <input type="text" name="airline" id="" class="form-control">
                                    @error('airline')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group py-2">
                                    <label class="fw-bold">Arrival flight number</label><br>
                                    <input type="text" name="flight_number" id="" class="form-control">
                                    @error('flight')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group py-2">
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="fw-bold">Flight arrival time</label><br>
                                            <input type="time" name="flight_time" id="" class="form-control">
                                            @error('arrival_time')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-5">
                                            <label class="fw-bold">Terminal / Gate</label>
                                            <input type="text" name="terminal" id="" class="form-control">
                                            @error('terminal')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Flight details end-->

                            <!-- Extra details -->
                            <div class="row-7 bg-light border py-3 px-3 mt-3">

                                <h5 class="fw-bold">CHOOSE EXTRAS</h5>
                                <table class="table table-hover table-bordered">
                                    @foreach ($extras as $extra)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="extras[]" id="extras"
                                                        value="{{ $extra->price }}"
                                                        onclick="setExtraAmount({{ $extra->price }})">
                                                    <label for="extras">{{ $extra->name }}</label>
                                                </td>
                                                <td>{{ $extra->price }}</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                                @error('extras')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- Extra details end-->

                            <!-- Price amounts -->
                            <div class="row-5 bg-light border fw-bold py-3 px-3 mt-3">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><label for="">EXTRAS:</label></td>
                                            <td id="extrasamt">0.00</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">SUBTOTAL:</label></td>
                                            <td id="subtotal">0.00</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TAX:</label></td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">TOTAL:</label></td>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">DEPOSIT REQUIRED:</label></td>
                                            <td>0.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="py-3 text-center">
                        <button type="submit" class="btn btn-dark btn-sm">Back</button>
                        <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                        <button type="submit" class="btn btn-warning btn-sm">Preview</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


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

        // $('#extras').click(function() {
        //     if ($(this).is(':checked')) {
        //         // Do stuff
        //     }
        // });

        function setExtraAmount(amount) {
            $("#extrasamt").html(amount);
            console.log(amount);
            // $("#extras").html(response.extras);
        }
    </script>
