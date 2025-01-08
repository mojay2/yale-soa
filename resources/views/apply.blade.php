@extends('layouts.app')
@section('title', 'Apply - Yale School of Art')
@php
    $backgroundImage = file_exists(public_path('images/yale-apply-bg.jpeg'))
        ? asset('images/yale-apply-bg.jpeg')
        : null;
@endphp

@section('content')
    {{-- Mission Statement --}}
    <section class="py-5 text-left container-fluid"
        style="background: {{ $backgroundImage ? "url('$backgroundImage') no-repeat center center" : 'gray' }}; background-size: cover;">
        <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
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
            <h2 class="fw-bold display-4 mb-4 text-left">Announcements</h2>
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
            <h2 class="fw-bold display-4 mb-4 text-left">Admission Guidelines</h2>

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

            <div class="accordion shadow-lg" id="admissionGuidelines">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-requirements">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-requirements" aria-expanded="false"
                            aria-controls="collapse-requirements">
                            Submission Requirements
                        </button>
                    </h2>
                    <div id="collapse-requirements" class="accordion-collapse collapse"
                        aria-labelledby="heading-requirements" data-bs-parent="#accordion-about">
                        <div class="accordion-body">
                            <ul>
                                <li><strong>Application form:</strong> Open from early October until the January 8, 2025
                                    deadline. Please note that the School of Art is NOT part of the Yale Graduate School of
                                    Arts and Sciences, and it is not possible to apply by using application materials found
                                    on the Graduate School’s Web site.</li>

                                <li><strong>Fee:</strong> Follow payment instructions at <a
                                        href="https://apply.art.yale.edu/apply/"
                                        target="_blank">https://apply.art.yale.edu/apply/</a> to submit your $100
                                    non-refundable fee. Yale School of Art practices “need blind admission” (candidate
                                    financial need or ability is never disclosed to the admission committee during review of
                                    MFA applications), as such fee waivers are not available. The only exception is
                                    applicants whose primary citizenship is a nation with cost-prohibitive US exchange
                                    rates. The 2025 list is: Venezuela, Iran, Vietnam, Indonesia, Uzbekistan, Sierra Leone,
                                    Laos, Guinea, Paraguay, and Cambodia.</li>

                                <li><strong>Statement:</strong> A one-page statement addressing your current practice,
                                    interests, influences, and/or lived experiences relative to the subject matter of your
                                    work and research, and goals for graduate study. Applicants to the Painting/Printmaking
                                    program should make reference in their statements to the “representative work” in the
                                    portfolio; this is not critical for the other programs.</li>

                                <li><strong>Recommendations:</strong> Letters from three references, ideally practicing or
                                    teaching in your area of interest. It is recommended to seek letters of support from
                                    those familiar with your practice, community values, and potential for growth in Yale’s
                                    MFA program. NOTE: Ask recommenders for letters with plenty of lead time. The admissions
                                    committee reviews applications shortly after the deadline. Though the submission portal
                                    for references will remain open, late submissions risk possible exclusion from the first
                                    round of reviews. Applicants can view the receipt status of reference letters and send
                                    reminders on the application status page.</li>

                                <li><strong>Transcripts:</strong> An undergraduate academic transcript showing dates of
                                    attendance, coursework, and grades from your degree-issuing institution. Junior or
                                    community college transcripts are not necessary to include when submitting transcripts.
                                    A student/unofficial copy of your transcript may be submitted to the application for the
                                    preliminary review. Yale only requires official transcripts from applicants selected as
                                    finalists invited to interview. The Graduate Record Examination (GRE) scores are NOT
                                    required.</li>

                                <li><strong>Portfolio of work:</strong> Select work that you are most excited about; that
                                    indicates the current direction and ideas you’re exploring and demonstrates
                                    technical/formal skills you’ve achieved. Be sure to include work done within the last
                                    year; we recommend at least half the works you include to be recent. Image order will
                                    default chronologically by year; you will not be able to override this. The application
                                    system will require the designation of one “representative work” within your portfolio,
                                    which is simply the default image for the cover page of each applicant’s file, so choose
                                    a piece that most represents ideas central to their current body of work. Do not include
                                    composite images (where multiple images, views, or works are grouped into one image file
                                    or layout). Do not include detail photos of work in your portfolio unless you consider
                                    them absolutely necessary (such as for three-dimensional pieces). Portfolio requirements
                                    differ depending upon area of concentration; follow the instructions for the area to
                                    which you are applying.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- international students --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-international">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-international" aria-expanded="false"
                            aria-controls="collapse-international">
                            Additional Guidelines for International Students
                        </button>
                    </h2>
                    <div id="collapse-international" class="accordion-collapse collapse"
                        aria-labelledby="heading-international" data-bs-parent="#accordion-international">
                        <div class="accordion-body">
                            <p>International students MUST use their passport name on all application materials.</p>
                            <p>English Proficiency Requirements In order to undertake graduate study, students for whom
                                English is not their first language must present evidence of competence in the use of the
                                English language. Although we have no official score cut-off, you will have difficulty in
                                the program without a level of language proficiency appropriate for graduate study.
                            </p>
                            <p>Yale School of Art accepts the following English Proficiency exams to fulfill this
                                requirement. </p>
                            <ul>
                                <li><strong>Test of English as a Foreign Language (TOEFL iBT)</strong></li>
                                <li><strong>The International English Language Testing System (IELTS) </strong></li>
                                <li><strong>The Duolingo English Test. </strong></li>

                                <li><strong>Test of English as a Foreign Language (TOEFL iBT)</strong>which is administered
                                    by the Educational Testing Service, www.ets.org. The TOEFL code number for the Yale
                                    School of Art is 3982. Candidates for admission generally achieve a composite
                                    Internet-based test score of at least 100, or a computer-based score of at least 250,
                                    with speaking and listening scores of at least 28. If the TOEFL iBT is not available in
                                    your area, you are required to complete the TOEFL that is available, plus you are
                                    required to take the Test of Spoken English (TSE). A minimum TOEFL score of 550 is
                                    generally achieved for the pbt.
                                </li>

                                <li><strong>IELTS</strong> test scores may be accepted with a minimum score of 7. Your
                                    ability to listen, read, write and speak in English will be assessed during the test.
                                    IELTS is graded on a scale of 1-9. www.ielts.org IELTS is jointly owned by the British
                                    Council, IDP: IELTS Australia and Cambridge Assessment English.
                                </li>

                                <li><strong>The Duolingo English Test</strong> is an online English proficiency test that
                                    can be taken online, on-demand, in under an hour. The test is taken via a computer with
                                    a camera and includes a proficiency score, video interview, and writing sample, which
                                    are shared with Yale when you send your results. Certified results are available within
                                    48 hours of the test session. Students generally receive a score of 120.
                                    englishtest.duolingo.com/applicants
                                </li>
                                <p><i>The English Proficiency Test may be waived if the undergraduate degree has been
                                        obtained from a four-year, English-speaking institution. When completing your
                                        application, please submit without confirming your scores. Our faculty reviewers
                                        know to verify your language proficiency via transcripts.
                                    </i></p>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- next steps --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-next">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-next" aria-expanded="false" aria-controls="collapse-next">
                            Next Steps After Applying
                        </button>
                    </h2>
                    <div id="collapse-next" class="accordion-collapse collapse" aria-labelledby="heading-next"
                        data-bs-parent="#accordion-next">
                        <div class="accordion-body">
                            <p>Once an application has been submitted, you should familiarize yourself with the admission
                                status page within our application portal. Here you will be able to track the receipt of
                                required supporting materials (such as recommendations).
                            </p>
                            <p>Applicants are encouraged to check the status of their application materials and follow up as
                                necessary. Submitted items are updated in real time on the application status checklist
                                page. Our office is unable to provide application status checks or confirm the receipt of
                                items by phone or by email due to the high volume of incoming applications.
                            </p>
                            <p>Applicants who have passed the Preliminary Selection Jury will be notified in early February.
                                At this time, applicants invited to interview are required to submit official transcripts to
                                the School. Candidates are asked to prepare supplemental portfolio materials to be presented
                                digitally during the interview. Detailed instructions will be included in the invitation to
                                interview. Individual interviews will be scheduled for mid-late February, depending on the
                                program. The interview is an important component of the final selection process.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- admission --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-admission">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-admission" aria-expanded="false" aria-controls="collapse-admission">
                            Admission
                        </button>
                    </h2>
                    <div id="collapse-admission" class="accordion-collapse collapse" aria-labelledby="heading-admission"
                        data-bs-parent="#accordion-admission">
                        <div class="accordion-body">
                            <p>Final notification of admission will be sent in early March. Offers of admission are good
                                only for the year in which they are made; Yale does not practice deferred admission.
                                Financial Aid Award notification will be sent shortly after notification of admission for
                                those who meet the filing deadline. Offers of admission include an official reply form.
                                Declare your enrollment decision by submission of the form by April 15.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Announcements --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold display-4 mb-4 text-left">YALE UNIVERSITY’S NONDISCRIMINATION / TITLE IX STATEMENTS
            </h2>
            <div class="d-flex flex-column align-items-center">
                <div class="" style="width: 100%;">
                    <div class=" shadow-lg mb-4">
                        <div class="card card-body w-100">

                            <p>The University is committed to basing judgments concerning the admission, education, and
                                employment of individuals upon their qualifications and abilities and affirmatively seeks to
                                attract to its faculty, staff, and student body qualified persons of diverse backgrounds. In
                                accordance with this policy and as delineated by federal and Connecticut law, Yale does not
                                discriminate in admissions, educational programs, or employment against any individual on
                                account of that individual’s sex, race, color, religion, age, disability, status as a
                                protected veteran, or national or ethnic origin; nor does Yale discriminate on the basis of
                                sexual orientation or gender identity or expression. University policy is committed to
                                affirmative action under law in employment of women, minority group members, individuals
                                with disabilities, and protected veterans. Inquiries concerning these policies may be
                                referred to Valarie Stanley, Director of the Office for Equal Opportunity Programs, 221
                                Whitney Avenue, 3rd Floor, 203.432.0849. For additional information, see
                                www.yale.edu/equalopportunity. Title IX of the Education Amendments of 1972 protects people
                                from sex discrimination in educational programs and activities at institutions that receive
                                federal financial assistance. Questions regarding Title IX may be referred to the
                                University’s Title IX Coordinator, Stephanie Spangler, at 203.432.4446 or at
                                titleix@yale.edu, or to the U.S. Department of Education, Office for Civil Rights, 8th
                                Floor, Five Post Office Square, Boston MA 02109-3921. Telephone: 617.289.0111, Fax:
                                617.289.0150, TDD: 800.877.8339, or Email: ocr.boston@ed.gov.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Scroll to Top Button --}}
    <button id="scroll-to-top-btn" class="btn btn-primary btn-lg rounded-circle">
        <i class="bi bi-arrow-up"></i>
    </button>
@endsection
