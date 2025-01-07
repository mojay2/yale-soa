@extends('layouts.app')

@php
    $backgroundImage = file_exists(public_path('images/yale-bg-1.jpg')) ? asset('images/yale-bg-1.jpg') : null;
@endphp

@section('content')
    <section class="py-5 text-left container-fluid"
        style="background: {{ $backgroundImage ? "url('$backgroundImage') no-repeat center center" : 'gray' }}; background-size: tile;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
                <!-- Text Section with Solid Background -->
                <div class="p-5 bg-dark bg-opacity-75 text-white">
                    <h1 class="fw-bold display-3">Admin Dashboard</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container pt-5">
        <div class="row justify-content-center">
            @auth
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">{{ __('Contacts') }}</div>

                        <div class="card-body">
                            <table id="contacts-table" class="py-4 table table-bordered table-striped w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Subject</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->id }}</td>
                                            <td>{{ $contact->first_name }}</td>
                                            <td>{{ $contact->last_name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->contact_number }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm view-message"
                                                    onclick="console.log({{ $contact->id }})" data-id="{{ $contact->id }}"
                                                    data-bs-toggle="modal" data-bs-target="#viewMessageModal">
                                                    View
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </div>

    <!-- View Message Modal -->
    <div class="modal" id="viewMessageModal" tabindex="-1" aria-labelledby="viewMessageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewMessageModalLabel">Contact Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>First Name:</strong> <span id="modalFirstName"></span></p>
                    <p><strong>Last Name:</strong> <span id="modalLastName"></span></p>
                    <p><strong>Email:</strong> <span id="modalEmail"></span></p>
                    <p><strong>Contact Number:</strong> <span id="modalContactNumber"></span></p>
                    <p><strong>Subject:</strong> <span id="modalSubject"></span></p>
                    <p><strong>Message:</strong> <span id="modalMessage"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
