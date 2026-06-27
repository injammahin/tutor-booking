@extends('frontend.layouts.app')

@section('title', 'Monty Tutor | Premium Tutor Booking System')
@section('meta_description', 'Book premium tutoring sessions with Monty Tutor. Personalized academic support, flexible packages, and confidence-building learning plans.')

@section('content')

    @php
        $testimonials = [
            [
                'name' => 'Sarah Johnson',
                'grade' => 'Parent of Grade 5 Student',
                'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=400&q=85',
                'review' => 'The booking process was clear and professional. My child was struggling with math confidence for months, but after a few tutoring sessions, she started understanding the topics much better. The tutor explained everything calmly and gave her confidence to ask questions.',
            ],
            [
                'name' => 'Michael Carter',
                'grade' => 'Parent of Grade 7 Student',
                'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=400&q=85',
                'review' => 'Monty Tutor made the full process easy. I liked how the sessions were organized, and my son felt comfortable from the first lesson. The tutor helped him with homework, test preparation, and better study habits.',
            ],
            [
                'name' => 'Emily Roberts',
                'grade' => 'Grade 6 Student',
                'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=400&q=85',
                'review' => 'I used to feel nervous about math, especially multiplication and fractions. The tutor helped me step by step and made the lessons easier to understand. Now I feel more confident in class.',
            ],
            [
                'name' => 'Daniel Wilson',
                'grade' => 'Parent of Grade 4 Student',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=85',
                'review' => 'The website looks premium and the booking calendar is very easy to use. I could quickly understand the available sessions, choose the right time, and move forward with the booking. The tutoring support was also very professional.',
            ],
            [
                'name' => 'Ava Thompson',
                'grade' => 'Grade 8 Student',
                'image' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=400&q=85',
                'review' => 'The tutoring sessions helped me prepare for my test. I liked that the tutor did not rush. We reviewed the hard topics, practiced questions, and I felt more ready before my exam.',
            ],
            [
                'name' => 'Rachel Miller',
                'grade' => 'Parent of Grade 3 Student',
                'image' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=400&q=85',
                'review' => 'My daughter needed reading support, and Monty Tutor made the process simple. The tutor helped with fluency, vocabulary, and comprehension. I also liked the clear communication after the session.',
            ],
        ];
    @endphp

    <section class="hero-section">
        <div class="hero-bg-glow"></div>

        <div class="mx-auto grid max-w-7xl items-center gap-14 px-4 pb-20 pt-36 sm:px-6 lg:grid-cols-2 lg:px-8 lg:pb-28">

            <div>
                <div
                    class="inline-flex items-center gap-3 rounded-[10px] border border-purple-100 bg-white px-4 py-2 shadow-sm">
                    <span class="h-2.5 w-2.5 rounded-full bg-monty-green"></span>
                    <span class="text-sm font-bold uppercase tracking-[0.18em] text-monty-purple">
                        Building Academic Confidence
                    </span>
                </div>

                <h1 class="mt-7 text-5xl font-bold leading-[1.02] tracking-tight text-monty-black sm:text-5xl lg:text-6xl">
                    Premium tutoring that makes learning feel clear again.
                </h1>

                <p class="mt-7 max-w-xl text-lg leading-8 text-slate-600">
                    Monty Tutor helps students build confidence through personalized lessons,
                    flexible booking, structured progress tracking, and supportive academic coaching.
                </p>

                <div class="mt-9 flex flex-col gap-4 sm:flex-row">
                    <a href="{{ route('book-now') }}" class="btn-primary">
                        Book a Tutor
                        <span>→</span>
                    </a>

                    <a href="{{ route('packages') }}" class="btn-secondary">
                        View Packages
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="hero-image-card">
                    <img src="/image/hero.avif" alt="Student tutoring session"
                        class="h-[520px] w-full rounded-[10px] object-cover">

                    <div
                        class="absolute bottom-5 left-5 right-5 rounded-[10px] border border-white/40 bg-white/90 p-5 shadow-2xl backdrop-blur-xl">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <p class="text-sm font-bold uppercase tracking-[0.18em] text-monty-purple">
                                    Next Available
                                </p>
                                <h2 class="mt-2 text-2xl font-bold text-monty-black">
                                    Private Math Tutoring
                                </h2>
                                <p class="mt-2 text-sm font-semibold text-slate-600">
                                    45 min session · Grade 3 to 8 · Online
                                </p>
                            </div>

                            <a href="{{ route('book-now') }}"
                                class="rounded-[10px] bg-monty-purple px-5 py-3 text-sm font-bold text-white">
                                Book
                            </a>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>

    <section class="section-white">
        <div class="page-container">
            <div class="section-heading-center">
                <p class="section-label">Why Families Choose Monty Tutor</p>
                <h2 class="section-title mx-auto">
                    A tutor booking experience that feels simple, organized, and premium.
                </h2>
                <p class="section-desc mx-auto">
                    The website is built around the full parent journey: understand the service,
                    compare packages, choose a session, and complete booking with confidence.
                </p>
            </div>

            <div class="mt-14 grid gap-6 md:grid-cols-3">
                <div class="feature-card">
                    <div class="icon-box">🎯</div>
                    <h3>Personalized Matching</h3>
                    <p>Students get support based on subject, grade level, learning gaps, and confidence needs.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">📅</div>
                    <h3>Premium Booking Flow</h3>
                    <p>A clean booking calendar helps parents quickly choose available tutoring sessions.</p>
                </div>

                <div class="feature-card">
                    <div class="icon-box">📈</div>
                    <h3>Progress Focused</h3>
                    <p>Each session is designed to improve clarity, reduce confusion, and build stronger habits.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-soft">
        <div class="page-container grid items-center gap-12 lg:grid-cols-2">
            <div>
                <p class="section-label">Learning Pathway</p>
                <h2 class="section-title">
                    From first assessment to confident progress.
                </h2>
                <p class="section-desc">
                    Monty Tutor is not just a booking website. It communicates a clear learning journey
                    so parents understand what happens after they choose a session.
                </p>

                <div class="mt-8 space-y-5">
                    <div class="process-row">
                        <span>01</span>
                        <div>
                            <h3>Understand the student</h3>
                            <p>Collect grade, subject, goals, availability, and current learning challenges.</p>
                        </div>
                    </div>

                    <div class="process-row">
                        <span>02</span>
                        <div>
                            <h3>Recommend the right session</h3>
                            <p>Match the student with a suitable subject, session type, and package.</p>
                        </div>
                    </div>

                    <div class="process-row">
                        <span>03</span>
                        <div>
                            <h3>Build weekly confidence</h3>
                            <p>Support students through repetition, explanation, practice, and encouragement.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-stack-card">
                <img src="/image/intor.jpeg" alt="Teacher helping students"
                    class="h-[700px] w-[600px] rounded-[10px] object-cover">

                <div class="image-stack-note">
                    <p class="text-sm font-bold uppercase tracking-[0.18em] text-monty-purple">Parent Friendly</p>
                    <h3 class="mt-2 text-2xl font-bold text-monty-black">
                        Simple booking. Clear communication. Better outcomes.
                    </h3>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-white">
        <div class="page-container">
            <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">
                <div>
                    <p class="section-label">Popular Tutoring Programs</p>
                    <h2 class="section-title">
                        Support for the subjects families ask for most.
                    </h2>
                </div>

                <a href="{{ route('packages') }}" class="btn-secondary w-fit">
                    Explore Packages
                </a>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="program-card">
                    <span>➕</span>
                    <h3>Math Tutoring</h3>
                    <p>Number sense, multiplication, algebra basics, geometry, and homework support.</p>
                </div>

                <div class="program-card">
                    <span>📖</span>
                    <h3>Reading Support</h3>
                    <p>Fluency, comprehension, vocabulary, and stronger reading confidence.</p>
                </div>

                <div class="program-card">
                    <span>✍️</span>
                    <h3>Writing Coaching</h3>
                    <p>Grammar, sentence structure, paragraph writing, and clear communication.</p>
                </div>

                <div class="program-card">
                    <span>📝</span>
                    <h3>Test Preparation</h3>
                    <p>Study planning, practice questions, timed review, and exam confidence.</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="testimonial-section">
        <div class="page-container">
            <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">
                <div>
                    <p class="section-label">Parent & Student Reviews</p>
                    <h2 class="section-title">
                        Real confidence stories from tutoring families.
                    </h2>
                    <p class="section-desc">
                        Reviews can be managed dynamically later from the admin panel. For now,
                        this section is a premium static testimonial slider.
                    </p>
                </div>

                <div class="testimonial-controls">
                    <button type="button" id="testimonialPrev" aria-label="Previous testimonial">‹</button>
                    <button type="button" id="testimonialNext" aria-label="Next testimonial">›</button>
                </div>
            </div>

            <div class="testimonial-slider-wrap">
                <div id="testimonialSlider" class="testimonial-slider">
                    @foreach ($testimonials as $testimonial)
                        <article class="testimonial-slide">
                            <div class="testimonial-top">
                                <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                                    class="testimonial-avatar">

                                <div>
                                    <h3>{{ $testimonial['name'] }}</h3>
                                    <p>{{ $testimonial['grade'] }}</p>
                                </div>
                            </div>

                            <div class="testimonial-stars">
                                ★★★★★
                            </div>

                            <p class="testimonial-review review-excerpt">
                                {{ $testimonial['review'] }}
                            </p>

                            <button type="button" class="testimonial-see-more" data-name="{{ e($testimonial['name']) }}"
                                data-grade="{{ e($testimonial['grade']) }}" data-image="{{ e($testimonial['image']) }}"
                                data-review="{{ e($testimonial['review']) }}">
                                See More
                            </button>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="page-container text-center">
            <p class="section-label text-purple-200">Ready To Start?</p>

            <h2 class="mx-auto mt-4 max-w-3xl text-4xl font-bold tracking-tight text-white sm:text-5xl">
                Book a premium tutoring session and help your student feel confident again.
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-purple-100">
                Choose a session from the booking calendar or contact Monty Tutor before booking.
            </p>

            <div class="mt-9 flex flex-col justify-center gap-4 sm:flex-row">
                <a href="{{ route('book-now') }}" class="btn-white">
                    Book Now
                </a>

                <a href="{{ route('contact') }}" class="btn-outline-white">
                    Contact Me
                </a>
            </div>
        </div>
    </section>

    <div id="testimonialModal" class="testimonial-modal hidden">
        <div class="testimonial-modal-overlay"></div>

        <div class="testimonial-modal-card">
            <button type="button" id="testimonialModalClose" class="testimonial-modal-close">×</button>

            <div class="testimonial-modal-head">
                <img id="testimonialModalImage" src="" alt="" class="testimonial-modal-avatar">

                <div>
                    <h3 id="testimonialModalName"></h3>
                    <p id="testimonialModalGrade"></p>
                </div>
            </div>

            <div class="testimonial-stars mt-5">
                ★★★★★
            </div>

            <p id="testimonialModalReview" class="testimonial-modal-review"></p>
        </div>
    </div>

@endsection