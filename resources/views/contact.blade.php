@extends('master')

@section('content')

<h1 class="text-center mt-5 mb-5">Contact Us</h1>

<div class="row justify-content-center">
    <div class="col-md-4">

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="mb-1" for="name">Name</label>
                <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label class="mb-1" for="email">Email address</label>
                <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label class="mb-1" for="title">Title</label>
                <input type="text" class="form-control mb-3" id="title" name="title" placeholder="Enter your title" required>
            </div>

            <div class="form-group">
                <label class="mb-1" for="message">Message</label>
                <textarea class="form-control mb-3" id="message" name="message" placeholder="Enter your message" required></textarea>
            </div>

            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>

    </div>
</div>

@endsection