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
    
    <div class="container">
        <div class="row">

            @foreach ($teachers as $teacher)
                <div class="col-md-3 mb-3">
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
                            <p class="card-text">Website: {{ $teacher->website }}</p>
                            <p class="card-text">Description: {{ $teacher->description }}</p>
                            <p class="card-text">Remarks: {{ $teacher->remarks }}</p>
                            <a href="#" class="btn btn-outline-primary">Contact</a>
                        </div>
                    </div>
                </div>
            @endforeach
    
        </div>    
    </div>
     
@endsection