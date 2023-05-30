@extends('master')

@section('content')

    <h2 class="text-center mt-5 mb-5">User Registration</h2>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <form>
                <div class="form-group mb-3">
                  <label for="name" class="mb-1">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group mb-3">
                  <label for="email" class="mb-1">Email address</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group mb-3">
                  <label for="password" class="mb-1">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Enter a password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>    
        </div>
    </div>

@endsection