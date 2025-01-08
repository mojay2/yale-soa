@extends('layouts.app')
@section('title', 'Contact Us - Yale School of Art')
@php
    $backgroundImage = file_exists(public_path('images/yale-contact-bg.jpg'))
        ? asset('images/yale-contact-bg.jpg')
        : null;
@endphp

@section('content')
    {{-- Contact Us Intro --}}
    <section class="py-5 text-left container-fluid"
        style="background: {{ $backgroundImage ? "url('$backgroundImage') no-repeat center center" : 'gray' }}; background-size: cover;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
                <!-- Text Section with Solid Background -->
                <div class="p-5 bg-dark bg-opacity-75 text-white">
                    <h1 class="fw-bold display-3">Contact Us!</h1>
                    <p class="lead text-white">Please fill out the contact form and we will contact you within 24 to 74
                        hours.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Us Section --}}
    <section class="container py-5">
        <div class="row g-4">
            <!-- Left Column -->
            <div class="col-md-5 align-self-center">
                {{-- <p class="display-6">Please fill out the contact form and we will contact you within 24 to 74 hours.</p> --}}
                <p class="lead">If you have any questions or need assistance, please feel free to reach out to us via
                    email or phone. Below, you will find contact details for various inquiries related to our programs,
                    admissions, financial aid, and more. We look forward to hearing from you!
                </p>
                <ul class="list-unstyled small">
                    <li><strong>Emails:</strong></li>
                    <ul class="list-unstyled mt-2">
                        <li>Graduate MFA Admission: <a href="mailto:art.admissions@yale.edu">art.admissions@yale.edu</a>
                        </li>
                        <li>Newly Admitted/Waitlisted Students: <a href="mailto:taryn.wolf@yale.edu">taryn.wolf@yale.edu</a>
                        </li>
                        <li>Financial Aid: <a href="mailto:nicole.archer@yale.edu">nicole.archer@yale.edu</a></li>
                        <li>Alumni Transcripts/Education Verifications: <a
                                href="mailto:emily.cappa@yale.edu">emily.cappa@yale.edu</a></li>
                        <li>Undergraduate Art Major: <a href="mailto:art.dus@yale.edu">art.dus@yale.edu</a></li>
                        <li>Norfolk Summer School of Art: <a href="mailto:norfolkart@yale.edu">norfolkart@yale.edu</a></li>
                        <li>Public Affairs/Media Inquiries: <a
                                href="mailto:sarah.stevens-morling@yale.edu">sarah.stevens-morling@yale.edu</a></li>
                        <li>Donations and Gifts: <a href="mailto:nicole.freeman@yale.edu">nicole.freeman@yale.edu</a></li>
                        <li>Digital Technology Office: <a href="mailto:art.help@yale.edu">art.help@yale.edu</a></li>
                        <li>All Other Inquiries: <a href="mailto:artschool.info@yale.edu">artschool.info@yale.edu</a></li>
                    </ul>
                    <li class="mt-3">University Address: <br> New Haven, CT 06520, USA</li>
                    <li class="mt-3">Phone Number: <br> +1 203-432-4771</li>
                </ul>
            </div>


            <!-- Divider -->
            <div class="col-md-1 d-flex justify-content-center align-items-center">
                <div style="width: 1px; height: 100%; background-color: #ddd;"></div>
            </div>

            <!-- Right Column - Contact Form -->
            <div class="col-md-6 align-self-center">
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
