@extends('master')

@section('content')

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4 bg-light p-5 rounded">
            <h2 class="text-center">Teacher Registration</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="mb-1" for="firstname">First Name</label>
                    <input type="text" class="form-control mb-3" id="firstname" name="firstname" placeholder="Enter your first name" required>
                </div>

                <div class="form-group">
                    <label class="mb-1" for="lastname">Last Name</label>
                    <input type="text" class="form-control mb-3" id="lastname" name="lastname" placeholder="Enter your last name" required>
                </div>

                <div class="form-group">
                    <label class="mb-1" for="email">Email address</label>
                    <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label class="mb-1" for="streetnr">Street + Number</label>
                    <input type="text" class="form-control mb-3" id="streetnr" name="streetnr" placeholder="Enter your street and number" required>
                </div>
                
                <div class="form-group">
                    <label class="mb-1" for="codecity">Postal Code + City</label>
                    <input type="text" class="form-control mb-3" id="codecity" name="codecity" placeholder="Enter your postal code and city" required>
                </div>                

                <div class="form-group">
                    <label class="mb-1" for="phone">Phone</label>
                    <input type="tel" class="form-control mb-3" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>

                <div class="form-group">
                    <label class="mb-1" for="website">Website</label>
                    <input type="text" class="form-control mb-3" id="website" name="website" placeholder="Enter your website URL" required>
                </div>

                <div class="form-group">
                    <label class="mb-1" for="remarks">Remarks</label>
                    <input type="text" class="form-control mb-3" id="remarks" name="remarks" placeholder="Enter any remarks" required>
                </div>

                <div class="form-group">
                    <label class="mb-1" for="description">Description</label>
                    <textarea class="form-control mb-3" id="description" name="description" placeholder="Enter a description" required></textarea>
                </div>

                <div class="form-group">
                    <label class="mb-1" for="category_id">Category</label>
                    <select class="form-control mb-3" id="category_id" name="category_id" required>
                        <option value="">Select a category</option>
                        <!-- Add options for categories -->
                        <option value="1">Administratie en onthaal</option>
                        <option value="2">Beauty en wellness</option>
                        <option value="3">Bouw</option>
                        <option value="4">Dieren</option>
                        <option value="5">Drones</option>
                        <option value="6">Elektro en techniek</option>
                        <option value="7">Energie en HVAC</option>
                        <option value="8">Financiën</option>
                        <option value="9">Grafische en multimedia</option>
                        <option value="10">Groenvoorziening</option>
                        <option value="11">Horeca en voeding</option>
                        <option value="12">Informatica</option>
                        <option value="13">Interieur en ontwerpen</option>
                        <option value="14">Kunst, antiek en creatief design</option>
                        <option value="15">Management</option>
                        <option value="16">Mode en kledij</option>
                        <option value="17">Safety</option>
                        <option value="18">Sales, marketing en communicatie</option>
                        <option value="19">Sport</option>
                        <option value="20">Starten met ondernemen</option>
                        <option value="21">Talen en redactie</option>
                        <option value="22">Toerisme</option>
                        <option value="23">Transport en logistiek</option>
                        <option value="24">Vastgoed</option>
                        <option value="25">Voertuigen en metaal</option>
                        <option value="26">Zorgverlening</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="mb-1" for="location_id">Location</label>
                    <select class="form-control mb-3" id="location_id" name="location_id" required>
                        <option value="">Select a location</option>
                        <!-- Add options for locations -->
                        <option value="1">SyntraPXL T2 Campus Genk</option>
                        <option value="2">SyntraPXL Pelt</option>
                        <option value="3">SyntraPXL Hasselt</option>
                        <option value="4">SyntraPXL Maaseik</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection