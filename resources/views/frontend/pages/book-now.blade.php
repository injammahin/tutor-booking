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
                        complete the booking request form in the popup.
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
                        <p>Complete parent and student information in the booking popup.</p>
                    </div>

                    <div class="book-step-card">
                        <span>03</span>
                        <h3>Confirm Booking</h3>
                        <p>Submit the request and wait for confirmation from Monty Tutor.</p>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <div id="bookingRequestModal" class="booking-request-modal hidden">
        <div class="booking-request-overlay"></div>

        <div class="booking-request-card">
            <button type="button" id="bookingRequestClose" class="booking-request-close">
                ×
            </button>

            <div class="booking-request-grid">

                <div class="booking-selected-panel">
                    <p class="section-label text-purple-200">Selected Session</p>

                    <h2 id="bookingModalTitle">
                        Private Tutoring Session
                    </h2>

                    <div class="booking-summary-list">
                        <div>
                            <span>Subject</span>
                            <strong id="bookingModalSubject">Math</strong>
                        </div>

                        <div>
                            <span>Type</span>
                            <strong id="bookingModalMode">Private</strong>
                        </div>

                        <div>
                            <span>Date</span>
                            <strong id="bookingModalDate">Selected Date</strong>
                        </div>

                        <div>
                            <span>Time</span>
                            <strong id="bookingModalTime">Selected Time</strong>
                        </div>

                        <div>
                            <span>Duration</span>
                            <strong id="bookingModalDuration">45 min</strong>
                        </div>

                        <div>
                            <span>Price</span>
                            <strong id="bookingModalPrice">$65</strong>
                        </div>

                        <div>
                            <span>Availability</span>
                            <strong id="bookingModalSpots">1 spot left</strong>
                        </div>
                    </div>
                </div>

                <div class="booking-form-panel-modal">
                    <div>
                        <p class="section-label">Booking Request</p>

                        <h3>
                            Parent and student details
                        </h3>

                        <p>
                            Fill in the information below. This is a static frontend form for now.
                            Later, this will save to the database and send admin notification.
                        </p>
                    </div>

                    <form id="bookingRequestForm" class="mt-6">
                        <input type="hidden" id="bookingSelectedTitle" name="session_title">
                        <input type="hidden" id="bookingSelectedSubject" name="session_subject">
                        <input type="hidden" id="bookingSelectedDate" name="session_date">
                        <input type="hidden" id="bookingSelectedTime" name="session_time">
                        <input type="hidden" id="bookingSelectedPrice" name="session_price">

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label class="form-label">Parent Name</label>
                                <input class="form-input" type="text" name="parent_name" placeholder="Enter parent name"
                                    required>
                            </div>

                            <div>
                                <label class="form-label">Phone Number</label>
                                <input class="form-input" type="text" name="phone" placeholder="Enter phone number"
                                    required>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="form-label">Email Address</label>
                            <input class="form-input" type="email" name="email" placeholder="Enter email address" required>
                        </div>

                        <div class="mt-4 grid gap-4 sm:grid-cols-2">
                            <div>
                                <label class="form-label">Student Name</label>
                                <input class="form-input" type="text" name="student_name" placeholder="Enter student name"
                                    required>
                            </div>

                            <div>
                                <label class="form-label">Student Grade</label>
                                <select class="form-input" name="student_grade" required>
                                    <option value="">Select grade</option>
                                    <option>Kindergarten</option>
                                    <option>Grade 1</option>
                                    <option>Grade 2</option>
                                    <option>Grade 3</option>
                                    <option>Grade 4</option>
                                    <option>Grade 5</option>
                                    <option>Grade 6</option>
                                    <option>Grade 7</option>
                                    <option>Grade 8</option>
                                    <option>High School</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4 grid gap-4 sm:grid-cols-2">
                            <div>
                                <label class="form-label">Preferred Format</label>
                                <select class="form-input" name="preferred_format" required>
                                    <option value="">Select format</option>
                                    <option>Online Tutoring</option>
                                    <option>In-Person Tutoring</option>
                                    <option>Flexible</option>
                                </select>
                            </div>

                            <div>
                                <label class="form-label">Preferred Contact</label>
                                <select class="form-input" name="preferred_contact" required>
                                    <option value="">Select contact</option>
                                    <option>Email</option>
                                    <option>Phone Call</option>
                                    <option>Text Message</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="form-label">What support is needed?</label>
                            <textarea class="form-input min-h-28" name="student_needs"
                                placeholder="Example: Math homework, reading confidence, STAR assessment, multiplication, test preparation..."
                                required></textarea>
                        </div>

                        <div id="bookingSuccessBox" class="booking-success-box hidden">
                            <strong>Booking request received!</strong>
                            <p>
                                This is a frontend confirmation. Later, this will be saved to the database.
                            </p>
                        </div>

                        <button type="submit" class="btn-primary mt-6 w-full justify-center">
                            Confirm Booking
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection