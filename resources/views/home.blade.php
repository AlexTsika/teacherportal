@extends('master')

@section('content')

<h1 class="text-center mt-5 mb-5">Welcome home, motherfucker!</h1>

<div class="row justify-content-center">
    <div class="col-md-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus culpa amet sint error, aliquam facilis dolorum nihil harum quia blanditiis reprehenderit. Enim, in? Alias fugit nesciunt quidem iusto, eius quam?</p>
    </div>
</div>

@endsection