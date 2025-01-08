@extends('layouts.app')
@section('title', 'Graduate Study Areas - Yale School of Art')
@php
    $backgroundImage = file_exists(public_path('images/yale-about-facilities-2.jpg'))
        ? asset('images/yale-about-facilities-2.jpg')
    : null; @endphp

@section('content')
    {{-- Study Areas Intro --}}
    <section class="py-5 text-left container-fluid"
        style="background: {{ $backgroundImage ? "url('$backgroundImage') no-repeat center center" : 'gray' }}; background-size: cover;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
                <!-- Text Section with Solid Background -->
                <div class="p-5 bg-dark bg-opacity-75 text-white">
                    <h1 class="fw-bold display-3">Graduate Study Areas</h1>
                    <p class="lead text-white">Our graduate programs offer a diverse range of study areas, designed to
                        provide advanced knowledge and specialized skills that empower students to excel in their chosen
                        fields. Explore the academic disciplines that will shape your future and open doors to endless
                        opportunities.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Study Areas Section --}}
    <section class="container py-5">
        <div class="row">
            <!-- Left Column: Navigator -->
            <div class="col-md-4 mb-4">
                <div class="p-4 bg-light shadow rounded">
                    <h2 class="h5 fw-bold">On This Page</h2>
                    <ul class="list-unstyled mt-3">
                        @foreach ($studyAreas['study-areas'] as $index => $studyArea)
                            <li>
                                <a href="#study-area-{{ $index }}" class="text-decoration-none text-primary">
                                    {{ $studyArea['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Right Column: Study Areas Content -->
            <div class="col-md-8">
                @foreach ($studyAreas['study-areas'] as $index => $studyArea)
                    <div class="mb-5" id="study-area-{{ $index }}">
                        <!-- Study Area Header -->
                        <h2 class="fw-bold display-5">{{ $studyArea['title'] }}</h2>
                        <p class="lead">{{ $studyArea['description'] }}</p>

                        <!-- Accordion for Credit Requirements and Plan of Study -->
                        <div class="accordion" id="accordion-{{ $index }}">
                            <!-- Credit Requirements -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-credit-{{ $index }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-credit-{{ $index }}" aria-expanded="true"
                                        aria-controls="collapse-credit-{{ $index }}">
                                        Credit Requirements
                                    </button>
                                </h2>
                                <div id="collapse-credit-{{ $index }}" class="accordion-collapse collapse"
                                    aria-labelledby="heading-credit-{{ $index }}"
                                    data-bs-parent="#accordion-{{ $index }}">
                                    <div class="accordion-body">
                                        {{ $studyArea['credit_requirements'] }}
                                    </div>
                                </div>
                            </div>

                            <!-- Plan of Study -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-plan-{{ $index }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-plan-{{ $index }}" aria-expanded="false"
                                        aria-controls="collapse-plan-{{ $index }}">
                                        Plan of Study
                                    </button>
                                </h2>
                                <div id="collapse-plan-{{ $index }}" class="accordion-collapse collapse"
                                    aria-labelledby="heading-plan-{{ $index }}"
                                    data-bs-parent="#accordion-{{ $index }}">
                                    <div class="accordion-body">
                                        {{-- Render Plan of Study --}}
                                        @if (is_array($studyArea['plan_of_study']))
                                            @foreach ($studyArea['plan_of_study'] as $section => $htmlContent)
                                                {!! $htmlContent !!}
                                            @endforeach
                                        @else
                                            {!! $studyArea['plan_of_study'] !!}
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Scroll to Top Button --}}
    <button id="scroll-to-top-btn" class="btn btn-primary btn-lg rounded-circle">
        <i class="bi bi-arrow-up"></i>
    </button>
@endsection
