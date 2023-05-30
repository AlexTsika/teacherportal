@extends('master')

@section('content')

<h1 class="text-center mt-5 mb-5">Welcome home, motherfucker!</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    
    <div class="row">

        @foreach ($teachers as $teacher)
            <div class="col-lg-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $teacher->firstname }} {{ $teacher->lastname }}</h5>
                        <p class="card-text">Category ID: {{ $teacher->category_id }}</p>
                        <p class="card-text">Location ID: {{ $teacher->location_id }}</p>
                        <p class="card-text">Website: {{ $teacher->website }}</p>
                        <p class="card-text">Description: {{ $teacher->description }}</p>
                        <p class="card-text">Remarks: {{ $teacher->remarks }}</p>
                        <a href="#" class="btn btn-outline-primary">Contact</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
     
@endsection