@extends('layouts.app')

@php
    $backgroundImage = file_exists(public_path('images/yale-bg-1.jpg')) ? asset('images/yale-bg-1.jpg') : null;
@endphp

@section('content')
    {{-- Contact Us Intro --}}
    <section class="py-5 text-left container-fluid"
        style="background: {{ $backgroundImage ? "url('$backgroundImage') no-repeat center center" : 'gray' }}; background-size: tile;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
                <!-- Text Section with Solid Background -->
                <div class="p-5 bg-dark bg-opacity-75 text-white">
                    <h1 class="fw-bold display-3">Contact Us!</h1>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Us Section --}}
    <section class="container py-5">
        <div class="row g-4">
            <!-- Left Column -->
            <div class="col-md-5 align-self-center">
                {{-- <h2 class="fw-bold">Contact Us</h2> --}}
                <p class="display-6">Please fill out the contact form and we will contact you within 24 to 74 hours.</p>
                <p class="lead">We are here to help you with your idea, or whatever stage your business is at, so don't
                    hesitate to tell
                    us what's on your mind. We'll make sure to turn that idea of yours into reality.</p>
                <ul class="list-unstyled">
                    <li><strong>Email:</strong> hello@gmail.com</li>
                    <li class="mt-3"><strong>Philippines Office:</strong><br> Dragon's Nest, 27 Calle Industria,
                        Bagumbayan, Quezon City</li>
                    <li class="mt-3"><strong>Canada Office:</strong><br> 151 York Street London, Ontario, N6A 1A8</li>
                </ul>
            </div>

            <!-- Divider -->
            <div class="col-md-1 d-flex justify-content-center align-items-center">
                <div style="width: 1px; height: 100%; background-color: #ddd;"></div>
            </div>

            <!-- Right Column - Contact Form -->
            <div class="col-md-6">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
