@extends('layouts.app')
@section('title', 'Home - Yale School of Art')

@php
    $backgroundImage = file_exists(public_path('images/yale-home-bg.jpg')) ? asset('images/yale-home-bg.jpg') : null;
    $backgroundImage2 = file_exists(public_path('images/yale-bg-2.jpg')) ? asset('images/yale-bg-2.jpg') : null;
    $backgroundImage3 = file_exists(public_path('images/yale-building.jpg')) ? asset('images/yale-building.jpg') : null;
@endphp

@section('content')
    {{-- Welcome --}}
    <section class="py-5 text-left container-fluid"
        style="background: {{ $backgroundImage ? "url('$backgroundImage') no-repeat center center" : 'gray' }}; background-size: tile;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
                <!-- Text Section with Solid Background -->
                <div class="p-5 bg-dark bg-opacity-75 text-white">
                    <h1 class="fw-bold display-3">Welcome to Yale School of Art</h1>
                    <p class="lead text-white">Yale’s Graduate & Professional Schools conferring MFA
                        degrees in Graphic Design, Painting/Printmaking, Photography, and Sculpture; and offers
                        undergraduate-level art courses to Yale College students. Our website exists as an ongoing
                        collaborative
                        experiment in digital publishing and information sharing. It functions as a wiki—all members of the
                        School of Art community have the ability to add new, and edit most existing content.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Latest News at SOA --}}
    <section class="container-fluid" id="latest-news" style="background-color: #f9f9f9;">
        <div class="container px-4 py-5">
            <h1 class="pb-2 border-bottom display-4 fw-bold text-black">Latest News at SOA</h1>
            <div class="row g-4 py-5">
                @foreach ($homeData['news'] as $index => $news)
                    <div class="col-12">
                        <div class="card h-100 rounded-5 shadow-lg">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/yale-about-facilities-' . (($index % 3) + 1) . '.jpg') }}"
                                        class="img-fluid rounded-start-5" alt="Placeholder">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title display-6 fw-bold">{{ $news['headline'] }}</h5>
                                        <p class="card-text">
                                        <p class="lead text-muted">{{ $news['date'] }}</p>
                                        </p>
                                        <p class="card-text">{{ $news['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Happening now at SOA --}}
    <section class="container-fluid" id="happening-now" style="background-color: ">
        <div class="container ">
            <div class="px-4 py-5">
                <h1 class="pb-2 border-bottom display-4 fw-bold text-black">Happening Now</h1>
                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    @foreach ($homeData['events'] as $event)
                        <div class="col">
                            <div class="card card-cover h-100 overflow-hidden text-black bg-dark rounded-5 shadow-lg"
                                style="position: relative; background:{{ $backgroundImage3 ? "url('$backgroundImage3') no-repeat center center" : 'gray' }};">
                                <div class="overlay"
                                    style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1;">
                                </div>
                                <div class="d-flex flex-column p-5 pb-3 text-white"
                                    style="position: relative; z-index: 2; height: 100%;">
                                    <h2 class="display-6 lh-1 fw-bold mb-4">{{ $event['title'] }}</h2>
                                    <div class="mt-auto">
                                        <ul class="d-flex list-unstyled justify-content-between mb-0">
                                            <li class="d-flex align-items-center">
                                                <small>{{ $event['date'] }}</small>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <svg class="bi me-2" width="1em" height="1em">
                                                    <use xlink:href="#calendar3" />
                                                </svg>
                                                <small>3d</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    {{-- Community Bulletin Board --}}
    <section class="container-fluid" id="bulletin"
        style="background: {{ $backgroundImage2 ? "url('$backgroundImage2') no-repeat center center" : 'gray' }}; background-size: cover;">

        <div class="container px-4 py-5">
            <div class="p-5 bg-dark bg-opacity-75 text-white">
                <h1 class="pb-2 border-bottom fw-bold display-4">Community Bulletin Board</h1>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    @foreach ($posts as $post)
                        <div class="col d-flex align-items-start rounded-5 shadow-lg p-4 bulletin-card">
                            <div>
                                <h2 class="post-title">{{ $post['title'] }}
                                </h2>
                                <p class="post-body">{{ $post['body'] }}</p>
                                <a href="#" class="btn btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#postModal" data-id="{{ $post['id'] }}">
                                    View More Info
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#submitPostModal">
                    Submit a Post
                </button>
            </div>
        </div>
    </section>

    @if (session('success'))
        <div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    @endif

    {{-- Bulletin Post view and submit Modals --}}
    <x-bulletin-modal />

    {{-- Scroll to Top Button --}}
    <button id="scroll-to-top-btn" class="btn btn-primary btn-lg rounded-circle">
        <i class="bi bi-arrow-up"></i>
    </button>
@endsection
