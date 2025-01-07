@extends('layouts.app')

@php
    $backgroundImage = file_exists(public_path('images/yale-bg-1.jpg')) ? asset('images/yale-bg-1.jpg') : null;
@endphp

@section('content')
    {{-- Events Intro --}}
    <section class="py-5 text-left container-fluid"
        style="background: {{ $backgroundImage ? "url('$backgroundImage') no-repeat center center" : 'gray' }}; background-size: tile;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
                <!-- Text Section with Solid Background -->
                <div class="p-5 bg-dark bg-opacity-75 text-white">
                    <h1 class="fw-bold display-3">Public Events</h1>
                    <p class="lead text-white"> Welcome to the School of Art’s public events calendar, initiated in the
                        summer of 2020. To stay updated on new events as they’re confirmed, all members of the public are
                        invited to subscribe this calendar to their own calendaring software by clicking the “Subscribe”
                        button below the calendar.</p>
                    <p class="text-white"> Additionally, the Simplified calendar view is available at
                        <a href="https://soapublicevents.eventcalendarapp.com/">yaleart.org/publicevents >></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Events Calendar --}}
    <section class="container py-5">
        <h2 class="fw-bold display-4 text-center mb-5">SOA Events Calendar</h2>
        <div class="embed-responsive" style="position: relative; overflow: hidden; width: 100%; padding-top: 56.25%;">
            <iframe src="https://soapublicevents.eventcalendarapp.com/" frameborder="0"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" allowfullscreen>
            </iframe>
        </div>
    </section>
@endsection
