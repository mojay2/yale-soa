@extends('layouts.app')

@php
    $backgroundImage = file_exists(public_path('images/yale-bg-1.jpg')) ? asset('images/yale-bg-1.jpg') : null;
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

    {{-- Happening now at SOA --}}
    {{-- <section class="container-fluid" id="happening-now" style="background-color: #00356b;"> --}}
    <section class="container-fluid" id="happening-now" style="background-color: ">
        <div class="container">
            <div class="px-4 py-5">
                <h1 class="pb-2 border-bottom display-4 fw-bold text-black">Upcoming Events</h1>
                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

                    @foreach ($homeData['events'] as $event)
                        <div class="col">
                            <div class="card card-cover h-100 overflow-hidden text-black bg-dark rounded-5 shadow-lg"
                                style="background:{{ $backgroundImage3 ? "url('$backgroundImage3') no-repeat center center" : 'gray' }}">
                                <div class="d-flex flex-column p-5 pb-3 text-white">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                                        {{ $event['title'] }}</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="d-flex align-items-center me-3">
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
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Community Bulletin Board --}}
    <section class="container-fluid" id="bulletin"
        style="background: {{ $backgroundImage2 ? "url('$backgroundImage2') no-repeat center center" : 'gray' }}; background-size: cover;">
        {{-- <section class="container-fluid" id="happening-now" style="background-color: #a42086;;"> --}}

        <div class="container px-4 py-5">
            <div class="p-5 bg-dark bg-opacity-75 text-white">
                <h1 class="pb-2 border-bottom fw-bold display-4">Community Bulletin Board</h1>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    @foreach ($homeData['posts'] as $post)
                        <div class="col d-flex align-items-start rounded-5 shadow-lg p-4 bulletin-card">
                            <div>
                                <h2>{{ $post['title'] }}
                                </h2>
                                <p class="post-body">{{ $post['body'] }}</p>
                                <a href="#" class="btn btn-primary">
                                    View More Info
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
