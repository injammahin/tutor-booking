@extends('frontend.layouts.app')

@section('title', 'Contact Me | Monty Tutor')
@section('meta_description', 'Contact Monty Tutor for tutoring questions, package guidance, subject support, or booking help.')

@section('content')

    <div class="contact-page">

        <section class="contact-hero">
            <div class="page-container grid items-center gap-12 lg:grid-cols-2">

                <div>
                    <p class="section-label">Contact Me</p>

                    <h1 class="contact-page-title">
                        Ask a question before booking your tutoring session.
                    </h1>

                    <p class="contact-page-text">
                        Not sure which package, subject, or session is best for your student?
                        Send a message and get clear guidance before booking.
                    </p>

                    <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                        <a href="{{ route('book-now') }}" class="btn-primary">
                            Book Now
                            <span>→</span>
                        </a>

                        <a href="{{ route('packages') }}" class="btn-secondary">
                            View Packages
                        </a>
                    </div>
                </div>

                <div class="contact-photo-card contact-hover-card">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1200&q=85"
                        alt="Contact tutoring support">

                    <div class="contact-photo-note">
                        <p class="section-label">Quick Support</p>
                        <h3>Get help choosing the right tutoring option.</h3>
                    </div>
                </div>

            </div>
        </section>

        <section class="contact-main-section">
            <div class="page-container grid gap-8 lg:grid-cols-[0.8fr_1.2fr]">

                <div class="contact-info-list">

                    <div class="contact-info-card contact-hover-card">
                        <span>📧</span>
                        <div>
                            <h3>Email</h3>
                            <p>hello@montytutor.com</p>
                        </div>
                    </div>

                    <div class="contact-info-card contact-hover-card">
                        <span>📞</span>
                        <div>
                            <h3>Phone</h3>
                            <p>+1 000 000 0000</p>
                        </div>
                    </div>

                    <div class="contact-info-card contact-hover-card">
                        <span>📍</span>
                        <div>
                            <h3>Location</h3>
                            <p>Online and local tutoring support</p>
                        </div>
                    </div>

                    <div class="contact-info-card contact-hover-card">
                        <span>⏰</span>
                        <div>
                            <h3>Response Time</h3>
                            <p>Usually within 24 hours</p>
                        </div>
                    </div>

                </div>

                <form class="contact-form-card contact-hover-card">
                    <div class="mb-7">
                        <p class="section-label">Send Message</p>

                        <h2>
                            Tell us what support your student needs.
                        </h2>

                        <p>
                            Share the student’s grade, subject, and current challenge. We will help guide you
                            toward the right session or package.
                        </p>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label class="form-label">Your Name</label>
                            <input class="form-input" type="text" placeholder="Enter your name">
                        </div>

                        <div>
                            <label class="form-label">Phone</label>
                            <input class="form-input" type="text" placeholder="Phone number">
                        </div>
                    </div>

                    <div class="mt-5">
                        <label class="form-label">Email Address</label>
                        <input class="form-input" type="email" placeholder="Email address">
                    </div>

                    <div class="mt-5">
                        <label class="form-label">Reason</label>
                        <select class="form-input">
                            <option>Select reason</option>
                            <option>Booking question</option>
                            <option>Package recommendation</option>
                            <option>Subject support</option>
                            <option>Schedule question</option>
                        </select>
                    </div>

                    <div class="mt-5">
                        <label class="form-label">Message</label>
                        <textarea class="form-input min-h-36" placeholder="Write your message"></textarea>
                    </div>

                    <button type="button" class="btn-primary mt-6 w-full justify-center">
                        Send Message
                    </button>
                </form>

            </div>
        </section>

        <section class="contact-support-section">
            <div class="page-container">

                <div class="contact-support-card contact-hover-card">
                    <div>
                        <p class="section-label">Booking Support</p>

                        <h2>
                            Need help choosing a session?
                        </h2>

                        <p>
                            Visit the booking calendar to see available tutoring sessions and choose the best
                            time for your student.
                        </p>
                    </div>

                    <a href="{{ route('book-now') }}" class="btn-primary">
                        Go To Booking Calendar
                    </a>
                </div>

            </div>
        </section>

    </div>

@endsection