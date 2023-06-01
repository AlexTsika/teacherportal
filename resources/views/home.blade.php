@extends('master')

@section('content')

{{-- title --}}
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-md-10">
        <h1 class="text-light text-shadow text-center">Welcome!</h1>
    </div>
</div>

{{-- succes message --}}
@if (session('success'))
    <div class="row justify-content-center mb-5">
        <div class="col-md-10">
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif

{{-- validation errors --}}
@if ($errors->any())
    <div class="row justify-content-center mb-5">
        <div class="col-md-10">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

{{-- map section --}}
<div class="row justify-content-center mb-5">
    <div class="col-md-10 bg-light p-5 rounded">
        <h2 class="text-center mb-5">SyntraPXL Locations Limburg</h2>
        <div id="map" style="height: 60vh;" class="rounded"></div>
    </div>
</div>

{{-- search functions --}}
<div class="row justify-content-center bg-light p-5">
    <div class="col-md-10">
        <div class="row justify-content-center">
            <div class="col-md-4">
                {{-- search name --}}
                <form action="/search" method="GET">
                    <label class="mb-1" for="search_name">Search name</label>
                    <input class="form-control mb-1" type="search" name="search_name" placeholder="Search name">
                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-4">
                {{-- search category --}}
                <form action="/category" method="GET">
                    <div class="form-group">
                        <label class="mb-1" for="category_id">Search category</label>
                        <select class="form-control mb-1" id="category_id" name="category_id" required>
                            <option value="">Select a category</option>
                            <!-- options for categories -->
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
                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-4">
                {{-- search location --}}
                <form action="/location" method="GET">
                    <div class="form-group">
                        <label class="mb-1" for="location_id">Search Location</label>
                        <select class="form-control mb-1" id="location_id" name="location_id" required>
                            <option value="">Select a location</option>
                            <!-- options for locations -->
                            <option value="1">SyntraPXL T2 Campus Genk</option>
                            <option value="2">SyntraPXL Neerpelt</option>
                            <option value="3">SyntraPXL Hasselt</option>
                            <option value="4">SyntraPXL Maaseik</option>
                        </select>
                    </div>
                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>              
    </div>
</div>
    
{{-- teacher cards --}}
<div class="row justify-content-center bg-light p-5">
    <div class="col-md-10">

        <div class="row justify-content-center">

            @foreach ($teachers as $teacher)
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $teacher->firstname }} {{ $teacher->lastname }}</h4>
        
                            @if (!empty($teacher->category->name))
                                <h5 class="card-subtitle mb-3">{{ $teacher->category->name }}</h5>
                            @else
                                <h5 class="card-subtitle mb-3 text-muted">No category assigned</h5>
                            @endif
        
                            @if (!empty($teacher->location->name))
                                <h6 class="card-subtitle mb-3">{{ $teacher->location->name }}</h6>
                            @else
                                <h6 class="card-subtitle mb-3 text-muted">No location assigned</h6>
                            @endif
        
                            @if (!empty($teacher->website))
                                <p class="card-text mb-1"><a href="{{ $teacher->website }}">{{ $teacher->website }}</a></p>
                            @else
                                <p class="card-text mb-1 text-muted">No website assigned</p>
                            @endif
        
                            @if (!empty($teacher->description))
                                <p class="card-text mb-1">{{ $teacher->description }}</p>
                            @else
                                <p class="card-text mb-1 text-muted">No description given</p>
                            @endif
        
                            @if (!empty($teacher->remarks))
                                <p class="card-text mb-1">{{ $teacher->remarks }}</p>
                            @else
                                <p class="card-text mb-1 text-muted">No remarks given</p>
                            @endif
                            
                            <a href="#" target="_blank" class="btn btn-outline-primary">Contact</a>
                        </div>
                    </div>
                </div>
            @endforeach
        
        </div>   

    </div>
</div> 
     
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var map = L.map('map').setView([51.1129, 5.5075], 10);
            
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            
            // SyntraPXL Campus Genk
            var marker1 = L.marker([50.996677814315916, 5.536326957713524], { title: 'SyntraPXL Campus Genk' }).addTo(map);
            // Redirect to location Genk when marker is clicked
            marker1.on('click', function () {
                window.location.href = '/location?location_id=1';
            });
            // SyntraPXL Campus Pelt
            var marker2 = L.marker([51.22895210497301, 5.425274296941194], { title: 'SyntraPXL Campus Pelt' }).addTo(map);
            // Redirect to location Pelt when marker is clicked
            marker2.on('click', function () {
                window.location.href = '/location?location_id=2';
            });
            // SyntraPXL Campus Hasselt
            var marker3 = L.marker([50.93730964771964, 5.363997355864175], { title: 'SyntraPXL Campus Hasselt' }).addTo(map);
            // Redirect to location Hasselt when marker is clicked
            marker3.on('click', function () {
                window.location.href = '/location?location_id=3';
            });
            // SyntraPXL Campus Maaseik
            var marker4 = L.marker([51.10659669894506, 5.778770625193791], { title: 'SyntraPXL Campus Maaseik' }).addTo(map);
            // Redirect to location Maaseik when marker is clicked
            marker4.on('click', function () {
                window.location.href = '/location?location_id=4';
            });
            
            var bounds = L.latLngBounds([marker1.getLatLng(), marker2.getLatLng(), marker3.getLatLng(), marker4.getLatLng()]);
            map.fitBounds(bounds);
        });
    </script>
@endpush