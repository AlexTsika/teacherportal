@extends('master')

@section('content')

    <h2 class="text-center mt-5 mb-5">Log In</h2>

    <div class="row justify-content-center">
        <div class="col-md-4">

            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="email" class="mb-1">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="mb-1">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter a password" required>
                </div>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection