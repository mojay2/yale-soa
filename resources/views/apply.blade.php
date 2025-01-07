@extends('layouts.app')

@php
    $backgroundImage = file_exists(public_path('images/yale-bg-1.jpg')) ? asset('images/yale-bg-1.jpg') : null;
@endphp

@section('content')
    {{-- Mission Statement --}}
    <section class="py-5 text-left container-fluid"
        style="background: {{ $backgroundImage ? "url('$backgroundImage') no-repeat center center" : 'gray' }}; background-size: tile;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
                <!-- Text Section with Solid Background -->
                <div class="p-5 bg-dark bg-opacity-75 text-white">
                    <h1 class="fw-bold display-3">
                        Apply to the School
                    </h1>
                    <p class="lead text-white">
                        The Yale School of Art is a graduate school that confers Master of Fine Arts Degrees in Graphic
                        Design, Painting / Printmaking, Photography, and Sculpture
                    </p>
                    <p class="text-white"> For information on applications to the MFA program, please click the “Graduate
                        Admission” link below.

                        The undergraduate admissions process is handled entirely through Yale College. Please refer all
                        undergraduate admissions questions to the Yale College Undergraduate Admissions Office.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Announcements --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold display-4 mb-4 text-center">Announcements</h2>
            <div class="d-flex flex-column align-items-center">
                <div class="" style="width: 100%;">
                    <div class=" shadow-lg mb-4">
                        <div class="card card-body w-100">
                            <h4 class="card-title fw-bold">Fall 2025 Application</h4>
                            <p>Deadline: Wednesday, January 8, 2025, at 11:59pm Eastern Standard Time</p>
                            <p>The SoA wiki admission pages provide information about applying to Yale’s MFA program. Use
                                this as your resource while preparing your application.</p>
                            <p>Questions that are not easily answered via these pages may be directed to our office, either
                                via email art.admissions@yale.edu. Please note that Yale does not offer campus tours or
                                personalized portfolio review or advice about the content of applicant submissions.</p>
                            <p>Application status and receipt of documents can be checked within the status portal at the
                                application link above after your application has been submitted.</p>

                            <p>Applicants are asked not to contact Yale School of Art faculty and/or current students
                                seeking program information, application and/or portfolio advisement. Please respect our
                                community members’ time and personal/private spaces (such as email, social media, direct
                                message, etc.) by utilizing the wiki and, when necessary, directing your inquiries
                                appropriately to those whose job it is to assist you.</p>
                            <p> Thank you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Admission Guidelines --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold display-4 mb-4 text-center">Admission Guidelines</h2>

            <!-- Section Description -->
            <div class="mb-4">
                <p class="lead">
                    Admission to Yale’s MFA program is for the fall semester only, annually. Preliminary admission
                    decisions and finalist notifications will be sent in early February. Offers of admission are sent in
                    early March.
                </p>

                <p>To apply for more than one area of concentration, separate applications and supporting
                    documentation must be submitted. Applying to more than one program does not increase an
                    applicant’s chances of selection.</p>
                <p>Please note: An offer of admission to Yale is valid only for enrollment the year the
                    application
                    is made. Applicants who are offered admission but choose not to enroll are welcome to
                    reapply
                    to the school in a future cycle.</p>

                <p>DEADLINE: The application for academic year 2025-2026 will open in October 2024. Take time to
                    prepare, review, and revise application materials, get familiar with the system, and request
                    letters and transcripts with lead time. The application will be due January 8, 2025 at
                    11:59PM.</p>

            </div>

            <!-- Guidelines Cards -->
            <div class="accordion" id="admissionGuidelines">
                <!-- General Info -->
                <div class="card mb-3">
                    <div class="card-header bg-dark text-white" id="generalInfo">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white text-decoration-none" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseGeneralInfo" aria-expanded="true"
                                aria-controls="collapseGeneralInfo">
                                General Information
                            </button>
                        </h5>
                    </div>

                    <div id="collapseGeneralInfo" class="collapse show" aria-labelledby="generalInfo"
                        data-bs-parent="#admissionGuidelines">
                        <div class="card-body">
                            <p>To apply for more than one area of concentration, separate applications and supporting
                                documentation must be submitted. Applying to more than one program does not increase an
                                applicant’s chances of selection.</p>
                            <p>Please note: An offer of admission to Yale is valid only for enrollment the year the
                                application
                                is made. Applicants who are offered admission but choose not to enroll are welcome to
                                reapply
                                to the school in a future cycle.</p>
                        </div>
                    </div>
                </div>

                <!-- Application Deadline -->
                <div class="card mb-3">
                    <div class="card-header bg-dark text-white" id="applicationDeadline">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white text-decoration-none" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseDeadline" aria-expanded="false"
                                aria-controls="collapseDeadline">
                                Application Deadline
                            </button>
                        </h5>
                    </div>

                    <div id="collapseDeadline" class="collapse" aria-labelledby="applicationDeadline"
                        data-bs-parent="#admissionGuidelines">
                        <div class="card-body">
                            <p>DEADLINE: The application for academic year 2025-2026 will open in October 2024. Take time to
                                prepare, review, and revise application materials, get familiar with the system, and request
                                letters and transcripts with lead time. The application will be due January 8, 2025 at
                                11:59PM.</p>
                        </div>
                    </div>
                </div>

                <!-- Application Materials -->
                <div class="card mb-3">
                    <div class="card-header bg-dark text-white" id="applicationMaterials">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white text-decoration-none" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseMaterials" aria-expanded="false"
                                aria-controls="collapseMaterials">
                                Application Materials
                            </button>
                        </h5>
                    </div>

                    <div id="collapseMaterials" class="collapse" aria-labelledby="applicationMaterials"
                        data-bs-parent="#admissionGuidelines">
                        <div class="card-body">
                            <ul>
                                <li><strong>Application form:</strong> Open from early October until the January 8, 2025
                                    deadline.</li>
                                <li><strong>Fee:</strong> $100 non-refundable fee. Exceptions apply for some countries with
                                    cost-prohibitive US exchange rates.</li>
                                <li><strong>Statement:</strong> A one-page statement addressing your current practice,
                                    influences, and goals for graduate study.</li>
                                <li><strong>Recommendations:</strong> Three reference letters from those familiar with your
                                    practice and potential.</li>
                                <li><strong>Transcripts:</strong> An undergraduate academic transcript showing dates of
                                    attendance, coursework, and grades.</li>
                                <li><strong>Portfolio of work:</strong> Select works demonstrating your current direction
                                    and
                                    technical skills. Ensure at least half are recent.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
