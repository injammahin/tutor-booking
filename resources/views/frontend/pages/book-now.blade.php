@extends('frontend.layouts.app')

@section('title', 'Book Now | Monty Tutor')
@section('meta_description', 'Book a tutoring session with Monty Tutor using a premium tutoring calendar.')

@section('content')

    <div class="book-page">

        <section class="book-hero">
            <div class="page-container">
                <div class="mx-auto max-w-4xl text-center">
                    <p class="section-label">Book Now</p>

                    <h1 class="book-page-title">
                        Choose your tutoring session.
                    </h1>

                    <p class="book-page-text">
                        Select an available session from the calendar. After clicking Book Now,
                        you will continue to the booking details and payment page.
                    </p>
                </div>
            </div>
        </section>

        <section class="book-calendar-section">
            <div class="page-container">

                <div class="book-calendar-card">

                    <div class="book-calendar-header">
                        <div>
                            <p class="section-label">Availability Calendar</p>

                            <h2>
                                Available tutoring sessions
                            </h2>

                            <p>
                                Browse weekly availability and choose the session that fits your student.
                            </p>
                        </div>

                        <div class="calendar-actions book-calendar-actions">
                            <button type="button" id="prevWeekBtn" class="calendar-nav-btn">‹</button>
                            <div id="calendarRange" class="calendar-range">This Week</div>
                            <button type="button" id="nextWeekBtn" class="calendar-nav-btn">›</button>
                        </div>
                    </div>

                    <div class="book-filter-row">
                        <button type="button" class="filter-chip active" data-filter="all">All Sessions</button>
                        <button type="button" class="filter-chip" data-filter="Math">Math</button>
                        <button type="button" class="filter-chip" data-filter="Reading">Reading</button>
                        <button type="button" class="filter-chip" data-filter="Writing">Writing</button>
                        <button type="button" class="filter-chip" data-filter="Test Prep">Test Prep</button>
                    </div>

                    <div class="book-calendar-desktop hidden lg:block">
                        <div class="calendar-week-head">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>

                        <div id="calendarGrid" class="calendar-grid"></div>
                    </div>

                    <div id="mobileSlotList" class="book-mobile-calendar lg:hidden"></div>

                </div>

            </div>
        </section>

        <section class="book-steps-section">
            <div class="page-container">
                <div class="grid gap-5 md:grid-cols-3">

                    <div class="book-step-card">
                        <span>01</span>
                        <h3>Select Session</h3>
                        <p>Choose an available tutoring session from the calendar.</p>
                    </div>

                    <div class="book-step-card">
                        <span>02</span>
                        <h3>Fill Details</h3>
                        <p>Complete parent and student information on the next page.</p>
                    </div>

                    <div class="book-step-card">
                        <span>03</span>
                        <h3>Confirm Payment</h3>
                        <p>Pay securely with PayPal to confirm the booking.</p>
                    </div>

                </div>
            </div>
        </section>

    </div>

@endsection

@push('scripts')
    <script>
        window.MontyBookingCheckoutUrl = "{{ route('booking.checkout') }}";
    </script>
@endpush