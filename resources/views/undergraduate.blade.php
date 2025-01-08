@extends('layouts.app')
@section('title', 'Undergraduate Study Areas - Yale School of Art')
@php
    $backgroundImage = file_exists(public_path('images/yale-about-facilities-1.jpg'))
        ? asset('images/yale-about-facilities-1.jpg')
    : null; @endphp

@section('content')
    {{-- Study Areas Intro --}}
    <section class="py-5 text-left container-fluid"
        style="background: {{ $backgroundImage ? "url('$backgroundImage') no-repeat center center" : 'gray' }}; background-size: cover;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
                <!-- Text Section with Solid Background -->
                <div class="p-5 bg-dark bg-opacity-75 text-white">
                    <h1 class="fw-bold display-3">Undergraduate Studies in Art</h1>
                    <p class="lead text-white">The undergraduate art program offers a diverse and comprehensive education in
                        the visual arts. Students are encouraged to explore their creativity through various mediums,
                        including painting, sculpture, photography, and digital design. With a strong emphasis on both
                        theory and practice, our program prepares students to pursue careers in the arts or further academic
                        study. Whether you're a beginner or an experienced artist, our courses provide a solid foundation
                        for developing your artistic voice and technical skills.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Study Areas Section --}}
    <section class="container py-5 px-4">
        <div class="row">
            <!-- Left Column: Navigator -->
            <div class="col-md-4 mb-4">
                <div class="p-4 bg-light shadow rounded">
                    <h2 class="h5 fw-bold">On This Page</h2>
                    <ul class="list-unstyled mt-3">
                        <li>
                            <a href="#study-area-about" class="text-decoration-none text-primary">
                                About The Yale College of Art Major
                            </a>
                        </li>
                        <li>
                            <a href="#study-area-calendar" class="text-decoration-none text-primary">
                                Undergraduate Calendar
                            </a>
                        </li>
                        <li>
                            <a href="#study-area-prospect" class="text-decoration-none text-primary">
                                Prospective Students
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Column: Study Areas Content -->
            <div class="col-md-8">
                <div class="mb-5" id="study-area-about">
                    <!-- Study Area Header -->
                    <h2 class="fw-bold display-5"> About The Yale College of Art Major
                    </h2>
                    <p class="lead">Yale College, the undergraduate division of Yale University, offers a Bachelor of Arts
                        degree program with a major in art. Undergraduate applicants wishing to major in art at Yale must
                        apply to Yale College directly.

                    </p>
                    <p class="lead">Please contact the Office of Undergraduate Admissions, PO Box 208234, 38 Hillhouse
                        Avenue, New Haven CT 06520-8234, 203.432.9300 (www.yalecollege.yale.edu).

                    </p>
                    <p class="lead">The program in art offers courses that, through work in a variety of media, provide an
                        experience in the visual arts as part of a liberal education as well as preparation for graduate
                        study and professional work. Courses at the 100 level stress the fundamental aspects of visual
                        formulation and articulation. Courses numbered 200 through 499 offer increasingly intensive study
                        leading to greater specialization in one or more of the visual disciplines such as graphic design,
                        painting/printmaking, photography, and sculpture.

                    </p>
                    <p class="lead">The prerequisites for acceptance into the major are a Sophomore Review, which is an
                        evaluation of work from studio courses taken at Yale School of Art, and five terms of introductory
                        (100-level) courses. Four must be completed at the time of the Sophomore Review. Visual Thinking
                        (Art 111a or b) and Basic Drawing (Art 114a or b) are mandatory.
                    </p>

                    <!-- Accordion for Credit Requirements and Plan of Study -->
                    <div class="accordion" id="accordion-about">
                        <!-- Credit Requirements -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-credit-about">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-credit-about" aria-expanded="true"
                                    aria-controls="collapse-credit-about">
                                    Required Courses
                                </button>
                            </h2>
                            <div id="collapse-credit-about" class="accordion-collapse collapse"
                                aria-labelledby="heading-credit-about" data-bs-parent="#accordion-about">
                                <div class="accordion-body">
                                    <p>For graduation as an art major, a total of fourteen (14) course credits in the major
                                        field
                                        is required.
                                    </p>

                                    <p>These fourteen course credits must include the following: (1) five prerequisite
                                        courses
                                        at the 100 level (including Visual Thinking and Basic Drawing); (2) four 200-level
                                        and above courses; (3) the Junior Major Seminar (Art 395a) or Critical Theory in the
                                        Studio (Art 201b); (4) the Senior Project (Art 495 and 496); and (5) two courses in
                                        the
                                        History of Art.</p>

                                    <p> Suggested program guidelines and specific requirements for the various areas of
                                        concentration are available from the director of undergraduate studies.</p>

                                    <p> A suggested program guideline is as follows:
                                    <ul>
                                        <li>Freshman year — Studio courses, two terms</li>
                                        <li>Sophomore year — Studio courses, three terms; Art history, one term</li>
                                        <li>Junior year — Studio courses, three terms including the Junior Major Seminar
                                            and/or
                                            Critical Theory; Art history, one term</li>
                                        <li>Senior year — Studio courses, four terms including the Senior Project</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Plan of Study -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-plan-about">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-plan-about" aria-expanded="false"
                                    aria-controls="collapse-plan-about">
                                    Goals of The Major
                                </button>
                            </h2>
                            <div id="collapse-plan-about" class="accordion-collapse collapse"
                                aria-labelledby="heading-plan-about" data-bs-parent="#accordion-about">
                                <div class="accordion-body">
                                    <p>Students in this major will:</p>
                                    <ul>
                                        <li>Develop an understanding of the visual arts through a studio-based curriculum
                                        </li>

                                        <li>Apply fundamentals of art across a variety of media and disciplines</li>


                                        <li>Relate the practice of making art to the fields of art history and theory</li>


                                        <li> Gain a high level of mastery of at least one artistic discipline</li>

                                        </li>
                                    </ul>
                                    <p><strong>COURSES</strong>

                                        Undergraduate studio courses are numbered 100 - 499 and can be found at
                                        <a href="http://art.yale.edu/Courses">http://art.yale.edu/Courses</a>.

                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- Introductory courses --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-courses-undergrad">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-courses-undergrad" aria-expanded="false"
                                    aria-controls="collapse-courses-undergrad">
                                    Introductory-level courses offered as a gateway to the Art major
                                </button>
                            </h2>
                            <div id="collapse-courses-undergrad" class="accordion-collapse collapse"
                                aria-labelledby="heading-courses-undergrad" data-bs-parent="#accordion-courses">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Art 004a, Words and Pictures</li>
                                        <li>Art 006a, Art of Printed Word</li>
                                        <li>Art 007b, Art of the Game</li>
                                        <li>Art 014a, Research in the Making</li>
                                        <li>Art 110a, Sculpture Basics</li>
                                        <li>Art 111a or b, Visual Thinking</li>
                                        <li>Art 114a or b, Basic Drawing</li>
                                        <li>Art 116a, Color</li>
                                        <li>Art 120b, Introduction to Sculpture: Wood</li>
                                        <li>Art 121b, Introduction to Sculpture: Metal</li>
                                        <li>Art 130a or b, Painting Basics</li>
                                        <li>Art 132a or b, Introduction to Graphic Design</li>
                                        <li>Art 136a or b, Capturing Light with Black-and-White Photography</li>
                                        <li>Art 138a or b, Digital Photography</li>
                                        <li>Art 142a, Introductory Documentary Filmmaking</li>
                                        <li>Art 145a or b, Digital Video</li>
                                        <li>Art 184a, 3-D Modeling for Creative Practice</li>
                                        <li>Art 185a, Principles of Animation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Undergraduate Calendar --}}
                <div class="mb-5" id="study-area-calendar">
                    <!-- Study Area Header -->
                    <h2 class="fw-bold display-5"> Undergraduate Studies School Calendar</h2>
                    <p class="lead">Yale College, the undergraduate division of Yale University, offers a Bachelor of Arts
                        degree program with a major in art. Undergraduate applicants wishing to major in art at Yale must
                        apply to Yale College directly. Please contact the Office of Undergraduate Admissions, PO Box
                        208234, 38 Hillhouse Avenue, New Haven CT 06520-8234, 203.432.9300 (www.yale.edu). Please direct all
                        inquiries and questions to the Admissions office directly, not to the School of Art.
                    </p>
                    <div class="embed-responsive"
                        style="position: relative; overflow: hidden; width: 100%; padding-top: 56.25%;">
                        <iframe src="https://yalesoaundergraduate.eventcalendarapp.com/" frameborder="0"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" allowfullscreen>
                        </iframe>
                    </div>
                </div>


                <!-- Study Area Header -->
                <div class="mb-5" id="study-area-prospect">
                    <!-- Study Area Header -->
                    <h2 class="fw-bold display-5"> Prospective Students</h2>
                    <p class="lead">Yale College, the undergraduate division of Yale University, offers a Bachelor of Arts
                        degree program with a major in art. Undergraduate applicants wishing to major in art at Yale must
                        apply to Yale College directly. Please contact the Office of Undergraduate Admissions, PO Box
                        208234, 38 Hillhouse Avenue, New Haven CT 06520-8234, 203.432.9300 (www.yale.edu). Please direct all
                        inquiries and questions to the Admissions office directly, not to the School of Art.
                    </p>
                    <p class="lead">
                        Whether or not you wish to major in art as an undergraduate, if you are an advanced visual artist
                        you may consider submitting an art portfolio as part of your application to Yale. In deciding
                        whether or not to do this, please bear in mind that it is Yale School of Art faculty members who
                        will review selected portfolios, not admissions officers. You should only consider submitting work
                        if your artwork is a strong and important part of your application and demonstrates a high level of
                        ability for a high school artist. You should limit the work submitted to between 5 and 8 pieces,
                        which should include at least one drawing.
                    </p>
                    <p class="lead">If you wish to submit images of your artwork as a supplement to your application, you
                        must do so online through the Common Application by the appropriate application deadline (November 1
                        for Single-Choice Early Action candidates; December 31 for Regular Decision candidates; March 1 for
                        transfer candidates). Please do not contact faculty or art department directly to request portfolio
                        reviews. You should submit a supplement through the Common Application SlideRoom program.
                    </p>
                    <p class="lead">How to Submit Supplementary Materials
                        If you are going to submit supplementary materials, please check the appropriate box on the Yale
                        Supplement to the Common Application, Section VI, titled “Supplementary Materials.”
                        Supplementary materials other than art or music or film may be attached to the Common Application as
                        Additional Information or mailed to our office, clearly labeled with your full legal name as it
                        appears on your admissions application, your date of birth, the name and state or country of your
                        high school, and the subject of the materials. Please see the sections below for more specific
                        information about submitting art, music, academic work, and web supplements.
                        While we cannot accept videotapes or DVDs of performances, applicants may include a link to a
                        website or brief YouTube video in the space indicated on the Yale Supplement to the Common
                        Application. In all cases, applicants should review the specific instructions below to ensure that
                        materials submitted are appropriate.
                    </p>
                    <p>For complete information, please visit:
                        <a
                            href="http://admissions.yale.edu/supplementary#art">http://admissions.yale.edu/supplementary#art</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Scroll to Top Button --}}
    <button id="scroll-to-top-btn" class="btn btn-primary btn-lg rounded-circle">
        <i class="bi bi-arrow-up"></i>
    </button>
@endsection
