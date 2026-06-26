@extends('frontend.layouts.app')

@section('title', 'About | Monty Tutor')
@section('meta_description', 'Learn about Monty Tutor, a premium tutoring service focused on academic confidence, personalized support, and clear learning progress.')

@section('content')

    <div class="about-page">

        <section class="inner-hero">
            <div class="page-container grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <p class="section-label">About Monty Tutor</p>

                    <h1 class="page-title about-title">
                        Tutoring designed around confidence, clarity, and real student growth.
                    </h1>

                    <p class="page-text">
                        Monty Tutor gives students a calm, structured, and supportive learning experience.
                        The goal is not only to complete homework. The real goal is to help students
                        understand the topic, ask better questions, and feel more confident in class.
                    </p>

                    <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                        <a href="{{ route('book-now') }}" class="btn-primary">
                            Book a Session
                            <span>→</span>
                        </a>

                        <a href="{{ route('packages') }}" class="btn-secondary">
                            View Packages
                        </a>
                    </div>
                </div>

                <div class="about-photo-card relative flex items-center justify-center">
                    <img src="/image/about-us.jpeg" alt="Tutor working with student"
                        class="h-[600px] w-[400px] max-w-full rounded-[7px] object-cover">

                    <div class="about-photo-note">
                        <p>Personalized tutoring for students who need clarity, structure, and confidence.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-soft">
            <div class="page-container grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <p class="section-label">Our Story</p>

                    <h2 class="section-title about-title">
                        A better way for parents to find academic support.
                    </h2>

                    <p class="section-desc">
                        Many parents know their child needs tutoring, but they do not always know where to start.
                        Monty Tutor is designed to make that decision easier. Parents can understand the service,
                        compare support options, choose a session, and continue with a clear booking process.
                    </p>

                    <p class="mt-5 text-lg leading-8 text-slate-600">
                        Every section of this website is built to answer important parent questions:
                        What subjects are covered? Which package is right? How does booking work?
                        What happens after payment? This makes the website feel trustworthy and complete.
                    </p>
                </div>

                <div class="about-story-card">
                    <p class="section-label">What We Believe</p>

                    <h3>
                        Students improve faster when lessons feel simple, patient, and organized.
                    </h3>

                    <div class="mt-7 space-y-4">
                        <div class="about-check-row">
                            <span>✓</span>
                            <p>Students should feel comfortable asking questions.</p>
                        </div>

                        <div class="about-check-row">
                            <span>✓</span>
                            <p>Parents should understand the tutoring plan clearly.</p>
                        </div>

                        <div class="about-check-row">
                            <span>✓</span>
                            <p>Lessons should focus on confidence, not only marks.</p>
                        </div>

                        <div class="about-check-row">
                            <span>✓</span>
                            <p>Booking should feel simple, modern, and professional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-white">
            <div class="page-container">
                <div class="section-heading-center">
                    <p class="section-label">Core Values</p>

                    <h2 class="section-title mx-auto about-title">
                        The tutoring experience is built on three simple principles.
                    </h2>

                    <p class="section-desc mx-auto">
                        These principles help the website communicate trust and help parents understand
                        why Monty Tutor is different from a basic tutoring service.
                    </p>
                </div>

                <div class="mt-12 grid gap-6 md:grid-cols-3">
                    <div class="about-value-card">
                        <span>01</span>
                        <h3>Confidence First</h3>
                        <p>
                            Students learn better when they feel safe asking questions, making mistakes,
                            and trying again without pressure.
                        </p>
                    </div>

                    <div class="about-value-card">
                        <span>02</span>
                        <h3>Clear Explanations</h3>
                        <p>
                            Lessons are broken into simple steps so students can understand the reason
                            behind the answer, not only memorize it.
                        </p>
                    </div>

                    <div class="about-value-card">
                        <span>03</span>
                        <h3>Consistent Progress</h3>
                        <p>
                            Every session has a purpose, a focus area, and a clear next step so the student
                            keeps moving forward.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-soft">
            <div class="page-container grid items-center gap-12 lg:grid-cols-2">
                <div class="about-mission-card">
                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-purple-200">
                        Our Mission
                    </p>

                    <h2 class="mt-4 text-4xl font-bold leading-tight text-white">
                        Make academic support feel simple, premium, and personal.
                    </h2>

                    <p class="mt-5 leading-8 text-slate-300">
                        Parents should not feel confused about tutoring. Students should not feel embarrassed
                        about needing help. Monty Tutor creates a clear, friendly, and organized experience
                        from the first website visit to every booked session.
                    </p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">
                        <div class="about-dark-mini-card">
                            <strong>Simple</strong>
                            <span>Easy to understand booking flow</span>
                        </div>

                        <div class="about-dark-mini-card">
                            <strong>Supportive</strong>
                            <span>Student-friendly learning approach</span>
                        </div>
                    </div>
                </div>

                <div>
                    <p class="section-label">Our Method</p>

                    <h2 class="section-title about-title">
                        A structured approach for better learning.
                    </h2>

                    <p class="section-desc">
                        A strong tutoring experience needs more than a single lesson. It needs a process
                        that understands the student, recommends the right support, and builds confidence
                        step by step.
                    </p>

                    <div class="mt-8 space-y-5">
                        <div class="about-method-row">
                            <span>01</span>
                            <div>
                                <h3>Identify learning gaps</h3>
                                <p>Understand the student's grade, subject, current challenges, and goals.</p>
                            </div>
                        </div>

                        <div class="about-method-row">
                            <span>02</span>
                            <div>
                                <h3>Create a clear support plan</h3>
                                <p>Recommend the right session type, package, and learning focus.</p>
                            </div>
                        </div>

                        <div class="about-method-row">
                            <span>03</span>
                            <div>
                                <h3>Practice with guidance</h3>
                                <p>Use clear explanations, examples, repetition, and feedback.</p>
                            </div>
                        </div>

                        <div class="about-method-row">
                            <span>04</span>
                            <div>
                                <h3>Build long-term confidence</h3>
                                <p>Help students become more independent and prepared for class.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-soft">
            <div class="page-container grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <p class="section-label">Premium Tutor Booking System</p>

                    <h2 class="section-title about-title">
                        Built for a complete frontend now and a dynamic backend later.
                    </h2>

                    <p class="section-desc">
                        This design is prepared for a full Laravel backend. After the frontend is complete,
                        the admin panel can manage all major content and booking features without editing code.
                    </p>

                    <a href="{{ route('book-now') }}" class="btn-primary mt-8">
                        View Booking Calendar
                    </a>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="about-admin-card">Tutor Management</div>
                    <div class="about-admin-card">Package Management</div>
                    <div class="about-admin-card">Calendar Availability</div>
                    <div class="about-admin-card">Booking Requests</div>
                    <div class="about-admin-card">Payment Tracking</div>
                    <div class="about-admin-card">FAQ Management</div>
                    <div class="about-admin-card">Testimonials</div>
                    <div class="about-admin-card">Site Settings</div>
                </div>
            </div>
        </section>

        @include('frontend.partials.page-cta')

    </div>

@endsection