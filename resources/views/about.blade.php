@extends('layouts.app')
@section('title', 'About - Yale School of Art')
@php
    $backgroundImage = file_exists(public_path('images/yale-about-bg.jpg')) ? asset('images/yale-about-bg.jpg') : null;
@endphp

@section('content')
    {{-- Mission Statement --}}
    <section class="py-5 text-left container-fluid"
        style="background: {{ $backgroundImage ? "url('$backgroundImage') no-repeat center center" : 'gray' }}; background-size: cover;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
                <div class="p-5 bg-dark bg-opacity-75 text-white">
                    <h1 class="fw-bold display-3">Mission Statement</h1>
                    <p class="lead text-white">The mission of the Yale School of Art is to provide students with
                        intellectually informed,
                        hands-on instruction in the practice of an array of visual arts media within the context of a
                        liberal arts university. As a part of the first institution of higher learning to successfully
                        integrate a studio-based education into such a broad pedagogical framework, the Yale School of
                        Art has a long and distinguished history of training artists of the highest caliber. A full-time
                        faculty of working artists in conjunction with a diverse cross-section of accomplished visiting
                        artists collaborate to design a program and foster an environment where the unique talents and
                        perspectives of individual students can emerge and flourish.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Study Areas --}}
    <div class="container px-4 py-5">
        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="d-flex flex-column align-items-start gap-2">
                <h3 class="fw-bold">The Yale School of Art is a graduate school that confers MFA degrees in Graphic
                    Design,
                    Painting/Printmaking, Photography, and Sculpture. </h3>
                <p class="text">
                    All information on the graduate program study areas can be found through the appropriate link below,
                    but
                    for information on undergraduate course offerings here at the School of Art, please refer both to
                    the
                    Undergraduate page on the School of Art website and to the information provided by Yale College.
                </p>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 g-4">
                <div class="col">
                    <div class="card h-100 p-4 shadow-lg rounded-5">
                        <h4 class="fw-semibold mb-0">Graduate Study Areas</h4>
                        <p class="text-muted">Graphic Design, Painting and Printmaking, Photography, and Sculpture.</p>
                        <a href="{{ route('about.study-areas') }}" class="btn btn-primary w-50 mx-auto">View info
                            &raquo;</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 p-4 shadow-lg rounded-5">
                        <h4 class="fw-semibold mb-0">Undergraduate Art Studies</h4>
                        <p class="text-muted">Explore diverse courses in art and design.</p>
                        <a href="{{ route('about.undergraduate') }}" class="btn btn-primary w-50 mx-auto">View info
                            &raquo;</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 shadow-lg rounded-5">
                        <h4 class="fw-semibold mb-0">Summer Programs</h4>
                        <p class="text-muted">Join our summer programs for hands-on learning experiences.</p>
                        <a href="#" class="btn btn-primary w-50 mx-auto">View info &raquo;</a>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 p-4 shadow-lg rounded-5">
                        <h4 class="fw-semibold mb-0">Apply Now!</h4>
                        <p class="text-muted">Start your Master of Fine Arts journey by applying today.</p>
                        <a href="{{ route('apply') }}" class="btn btn-primary w-50 mx-auto">Apply Now &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- People at SOA --}}
    <section class="container-fluid" id="people" style="background-color: #f7f7f7;">
        <div class="container px-4 py-5">
            <h1 class="pb-2 border-bottom fw-bold display-4">The People at SOA</h1>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card h-100 p-4 shadow-lg rounded-5">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/yale-about-professors.jpg') }}" alt="Faculty Image"
                                class="img-fluid rounded-5 shadow-lg" style="width: 100px; height: 100px;">
                            <div class="flex-grow-1 ms-3">
                                <h3 class="card-title">Faculty and Staff</h3>
                                <p class="card-text">A dedicated team of professionals shaping the future of SOA.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#facultyModal">
                                View More &raquo;
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 shadow-lg rounded-5">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/yale-about-students.jpeg') }}" alt="Students Image"
                                class="img-fluid rounded-5 shadow-lg" style="width: 100px; height: 100px;">
                            <div class="flex-grow-1 ms-3">
                                <h3 class="card-title">Current Students</h3>
                                <p class="card-text">Explore the creativity and work of our talented students.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">
                                View More &raquo;
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 shadow-lg rounded-5">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/yale-about-alumni.jpeg') }}" alt="Alumni Image"
                                class="img-fluid rounded-5 shadow-lg" style="width: 100px; height: 100px;">
                            <div class="flex-grow-1 ms-3">
                                <h3 class="card-title">Alumni</h3>
                                <p class="card-text">Our graduates making an impact worldwide.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alumniModal">
                                View More &raquo;
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- History Section --}}
    <section class="container px-4 py-5 border-bottom" id="history">
        <div class="row g-5 align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold display-4">Our History</h2>
                <p class="text-muted">The Yale School of Art has a rich history, spanning decades of artistic innovation
                    and
                    excellence. From its inception, the school has been a beacon for aspiring artists, providing
                    unparalleled opportunities for creative growth and exploration. Its legacy continues to inspire
                    generations of creators worldwide.</p>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#historyModal">
                        View Full History &raquo;
                    </button>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/yale-about-history.jpg') }}" alt="History Image"
                    class="img-fluid rounded-5 shadow-lg" style="width: 500px; height: 500px;">
            </div>
        </div>
    </section>

    {{-- Facilities --}}
    <section class="container px-4 py-5" id="facilities">
        <h2 class="fw-bold display-4 text-center mb-5">Our Facilities</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($aboutData['facilities'] as $index => $facility)
                <div class="col">
                    <div class="card shadow-lg rounded-5 overflow-hidden">
                        <img src="{{ asset('images/yale-about-facilities-' . (($index % 3) + 1) . '.jpg') }}"
                            alt="Facility Image" class="img-fluid shadow-lg"
                            style="width: 100%; height: 300px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title display-6 fw-bold">{{ $facility['name'] }}</h5>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary view-info-btn" data-bs-toggle="modal"
                                    data-bs-target="#facilityModal" data-name="{{ $facility['name'] }}"
                                    data-description="{{ $facility['description'] }}"
                                    data-address="{{ $facility['address'] }}"
                                    data-links="{{ json_encode($facility['links']) }}">
                                    View Info &raquo;
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Student Resources --}}
    <section class="container px-4 py-5" id="resources">
        <h2 class="fw-bold display-4 text-center mb-5">Student Resources</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($aboutData['resources'] as $index => $resource)
                <div class="col">
                    <div class="card shadow-lg rounded-5 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title display-6 px-3 py-2 fw-bold mb-0">{{ $resource['title'] }}</h5>
                                <button class="toggle-btn border-0 bg-transparent p-0" data-bs-toggle="collapse"
                                    data-bs-target="#resource-links-{{ $index }}" aria-expanded="false"
                                    aria-controls="resource-links-{{ $index }}">
                                    <i class="bi bi-plus-circle px-3 text-primary" style="font-size: 2rem;"></i>
                                </button>
                            </div>
                            <div class="collapse mt-3" id="resource-links-{{ $index }}">
                                <ul class="list-unstyled">
                                    @foreach ($resource['links'] as $link)
                                        <li class="px-3">
                                            <a href="{{ $link }}" target="_blank"
                                                class="text-primary text-decoration-none">
                                                {{ $link }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Scroll to Top Button --}}
    <button id="scroll-to-top-btn" class="btn btn-primary btn-lg rounded-circle">
        <i class="bi bi-arrow-up"></i>
    </button>

    {{-- Modals --}}
    <x-summer-modal />
    <x-people-modal :data="$aboutData" />
    <x-history-modal />
    <x-facilities-modal />
@endsection
