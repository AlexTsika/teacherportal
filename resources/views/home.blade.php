@extends('master')

@section('content')

<h1 class="text-center mt-5 mb-5">Welcome, motherfucker!</h1>

<div class="row justify-content-center mb-5">
    <div class="col-md-10">
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>

<div class="row justify-content-center mb-5">
    <div class="col-md-10">
        <h2 class="text-center bg-success p-5 rounded fw-bold">MAP GOES HERE</h2>
    </div>
</div>
    
<div class="row justify-content-center">
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
                            
                            {{-- <p class="card-text">Remarks: {{ $teacher->remarks }}</p> --}}
                            <a href="#" target="_blank" class="btn btn-outline-primary">Contact</a>
                        </div>
                    </div>
                </div>
            @endforeach
        
        </div>   

    </div>
</div> 
     
@endsection