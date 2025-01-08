@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="text-center">
            <h1 class="display-1 text-danger">404</h1>
            <h2 class="display-4">Oops! The page you are looking for could not be found.</h2>
            <p>It seems that the page you are trying to visit does not exist or has been moved.</p>
            <a class="btn btn-primary" href="{{ url('/') }}">Go Back to Home</a>
        </div>
    </div>
@endsection
