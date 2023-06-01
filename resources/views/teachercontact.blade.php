@extends('master')

@section('content')

<div class="row justify-content-center mt-5 mb-5">
    <div class="col-md-4 bg-light p-5 rounded">
        <h1 class="text-center">Contact Teacher</h1>

        <form action="" method="">
            @csrf
            
            <input type="hidden" name="teacher_id" value="{{ $teacher->id }}">
            <input type="hidden" name="teacher_email" value="{{ $teacher->email }}">
            
            <div class="form-group">
                <label for="name" class="mb-1">Name:</label>
                <input type="text" name="name" class="form-control mb-3">
            </div>
            
            <div class="form-group">
                <label for="email" class="mb-1">Email:</label>
                <input type="email" name="email" class="form-control mb-3" value="" readonly>
            </div>
            
            <div class="form-group">
                <label for="subject" class="mb-1">Subject:</label>
                <input type="text" name="subject" class="form-control mb-3">
            </div>

            <div class="form-group">
                <label for="message" class="mb-1">Message:</label>
                <textarea name="message" class="form-control mb-3"></textarea>
            </div>

            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>
</div>

@endsection