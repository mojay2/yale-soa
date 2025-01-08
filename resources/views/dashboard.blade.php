@extends('layouts.app')
@section('title', 'Dashboard - Yale School of Art')
@php
    $backgroundImage = file_exists(public_path('images/yale-dashboard-bg.jpg'))
        ? asset('images/yale-dashboard-bg.jpg')
        : null;
@endphp

@section('content')
    <section class="py-5 text-left container-fluid"
        style="background: {{ $backgroundImage ? "url('$backgroundImage') no-repeat center center" : 'gray' }}; background-size: cover;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
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

    {{-- Posts --}}
    <div class="container pt-5">
        <div class="row justify-content-center">
            @auth
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">{{ __('Posts') }}</div>

                        <div class="card-body">
                            <table id="posts-table" class="py-4 table table-bordered table-striped w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->first_name }}</td>
                                            <td>{{ $post->last_name }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->status }}</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm view-post" data-id="{{ $post->id }}"
                                                    data-bs-toggle="modal" data-bs-target="#viewPostModal">
                                                    View
                                                </button>
                                                <button class="btn btn-warning btn-sm change-status"
                                                    data-id="{{ $post->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#statusModal">
                                                    Status
                                                </button>
                                                <button class="btn btn-danger btn-sm archive-post"
                                                    data-id="{{ $post->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#archiveModal">
                                                    Archive
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

    {{-- view post modal --}}
    <div class="modal" id="viewPostModal" tabindex="-1" aria-labelledby="viewPostModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewPostModalLabel">Post Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>First Name:</strong> <span id="modalFirstNamePosts"></span></p>
                    <p><strong>Last Name:</strong> <span id="modalLastNamePosts"></span></p>
                    <p><strong>Title:</strong> <span id="modalTitle"></span></p>
                    <p><strong>Body:</strong> <span id="modalBody"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Status Modal --}}
    <div class="modal" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
        @csrf
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusModalLabel">Change Post Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="statusDropdown">Select Status:</label>
                    <select id="statusDropdown" class="form-select" name="status">
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="saveStatus">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- archive modal --}}
    <div class="modal" id="archiveModal" tabindex="-1" aria-labelledby="archiveModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="archiveModalLabel">Confirm Archive</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to archive this post?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="archiveConfirm">Archive</button>
                </div>
            </div>
        </div>
    </div>
@endsection
