@extends('frontend.layouts.app')

@section('title', 'FAQ | Monty Tutor')
@section('meta_description', 'Frequently asked questions about Monty Tutor booking, tutoring packages, subjects, online tutoring, and session confirmation.')

@section('content')

    <div class="faq-page">

        <section class="faq-hero">
            <div class="page-container">
                <div class="mx-auto max-w-4xl text-center">
                    <p class="section-label">FAQ</p>

                    <h1 class="faq-page-title">
                        Answers before parents book a tutoring session.
                    </h1>

                    <p class="faq-page-text">
                        Clear answers about tutoring options, packages, booking, payment,
                        and what happens after choosing a session.
                    </p>
                </div>
            </div>
        </section>

        <section class="faq-main-section">
            <div class="page-container">
                <div class="grid gap-10 lg:grid-cols-[0.72fr_1.28fr] lg:items-start">

                    <aside class="faq-side-card">
                        <p class="section-label">Need Help?</p>

                        <h2>
                            Not sure which session is right?
                        </h2>

                        <p>
                            Parents can ask about subject fit, grade level, session style,
                            schedule availability, or package recommendation before booking.
                        </p>

                        <div class="faq-side-points">
                            <div>
                                <span>✓</span>
                                <p>Package guidance</p>
                            </div>

                            <div>
                                <span>✓</span>
                                <p>Subject recommendation</p>
                            </div>

                            <div>
                                <span>✓</span>
                                <p>Booking support</p>
                            </div>
                        </div>

                        <a href="{{ route('contact') }}" class="btn-primary mt-7 w-full justify-center">
                            Contact Me
                        </a>
                    </aside>

                    <div class="faq-list-card">

                        <div class="faq-list-heading">
                            <p class="section-label">Common Questions</p>
                            <h2>Everything parents usually ask before booking.</h2>
                        </div>

                        <div class="mt-7 space-y-4">

                            <div class="faq-item faq-premium-item">
                                <button type="button" class="faq-question">
                                    <span>How does the booking process work?</span>
                                    <strong>+</strong>
                                </button>

                                <div class="faq-answer">
                                    Choose an available tutoring session from the calendar. After clicking Book Now,
                                    you will go to the booking details page, complete parent and student information,
                                    then pay with PayPal to confirm the booking.
                                </div>
                            </div>

                            <div class="faq-item faq-premium-item">
                                <button type="button" class="faq-question">
                                    <span>Do you offer online tutoring?</span>
                                    <strong>+</strong>
                                </button>

                                <div class="faq-answer">
                                    Yes. Monty Tutor can support online tutoring and local tutoring options.
                                    Later, the admin panel can control whether each session is online,
                                    in-person, or flexible.
                                </div>
                            </div>

                            <div class="faq-item faq-premium-item">
                                <button type="button" class="faq-question">
                                    <span>Which subjects are available?</span>
                                    <strong>+</strong>
                                </button>

                                <div class="faq-answer">
                                    Monty Tutor supports math, reading, writing, homework help,
                                    multiplication practice, grade-level skill building, and test preparation.
                                </div>
                            </div>

                            <div class="faq-item faq-premium-item">
                                <button type="button" class="faq-question">
                                    <span>Can parents choose a package?</span>
                                    <strong>+</strong>
                                </button>

                                <div class="faq-answer">
                                    Yes. Parents can choose a single session, a 4-session Growth package,
                                    or an 8-session Premium package depending on the student’s learning needs.
                                </div>
                            </div>

                            <div class="faq-item faq-premium-item">
                                <button type="button" class="faq-question">
                                    <span>What happens after payment?</span>
                                    <strong>+</strong>
                                </button>

                                <div class="faq-answer">
                                    After successful PayPal payment, the booking will be confirmed.
                                    In the full backend version, the system will save the booking,
                                    payment information, session details, and booking status.
                                </div>
                            </div>

                            <div class="faq-item faq-premium-item">
                                <button type="button" class="faq-question">
                                    <span>Can I change my selected session?</span>
                                    <strong>+</strong>
                                </button>

                                <div class="faq-answer">
                                    Yes. Before payment, you can go back to the booking calendar and select
                                    another available session. After payment, the admin or tutor can help
                                    manage rescheduling rules.
                                </div>
                            </div>

                            <div class="faq-item faq-premium-item">
                                <button type="button" class="faq-question">
                                    <span>Will the website become fully dynamic?</span>
                                    <strong>+</strong>
                                </button>

                                <div class="faq-answer">
                                    Yes. The backend will allow admin to manage pages, packages, tutors,
                                    booking slots, pricing, FAQs, testimonials, contact messages,
                                    and payment records.
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="faq-contact-section">
            <div class="page-container">
                <div class="faq-contact-card">
                    <div>
                        <p class="section-label">Still Have Questions?</p>

                        <h2>
                            Contact before booking.
                        </h2>

                        <p>
                            Send a message if you need help choosing the right subject,
                            package, or session time.
                        </p>
                    </div>

                    <a href="{{ route('contact') }}" class="btn-primary">
                        Contact Me
                    </a>
                </div>
            </div>
        </section>

    </div>

@endsection