@extends('frontend.layouts.app')

@section('title', 'Booking Checkout | Monty Tutor')
@section('meta_description', 'Complete your Monty Tutor booking information and pay with PayPal to confirm your tutoring session.')

@section('content')

    <section class="inner-hero">
        <div class="page-container">
            <div class="mx-auto max-w-4xl text-center">
                <p class="section-label">Booking Checkout</p>

                <h1 class="page-title mx-auto">
                    Complete your tutoring booking.
                </h1>

                <p class="page-text mx-auto">
                    Review the selected session, fill in parent and student details,
                    then pay with PayPal to confirm the booking.
                </p>
            </div>
        </div>
    </section>

    <section class="section-white">
        <div class="page-container">

            <div class="checkout-grid">

                <div class="checkout-main-card">
                    <div class="mb-8">
                        <p class="section-label">Student Information</p>
                        <h2 class="mt-3 text-3xl font-black text-monty-black">
                            Parent and student details
                        </h2>
                        <p class="mt-3 text-sm leading-7 text-slate-600">
                            This information helps the tutor prepare the right learning support before the session.
                        </p>
                    </div>

                    <form id="bookingDetailsForm">
                        <div class="grid gap-5 sm:grid-cols-2">
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

                        <div class="mt-5">
                            <label class="form-label">Email Address</label>
                            <input class="form-input" type="email" name="email" placeholder="Enter email address" required>
                        </div>

                        <div class="mt-5 grid gap-5 sm:grid-cols-2">
                            <div>
                                <label class="form-label">Student Name</label>
                                <input class="form-input" type="text" name="student_name" placeholder="Enter student name"
                                    required>
                            </div>

                            <div>
                                <label class="form-label">Student Grade</label>
                                <select class="form-input" name="student_grade" required>
                                    <option value="">Select grade</option>
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

                        <div class="mt-5 grid gap-5 sm:grid-cols-2">
                            <div>
                                <label class="form-label">Learning Format</label>
                                <select class="form-input" name="learning_format" required>
                                    <option value="">Select format</option>
                                    <option>Online Tutoring</option>
                                    <option>In-Person Tutoring</option>
                                    <option>Flexible</option>
                                </select>
                            </div>

                            <div>
                                <label class="form-label">Parent Preferred Contact</label>
                                <select class="form-input" name="preferred_contact" required>
                                    <option value="">Select contact method</option>
                                    <option>Email</option>
                                    <option>Phone Call</option>
                                    <option>Text Message</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-5">
                            <label class="form-label">Student Needs / Notes</label>
                            <textarea class="form-input min-h-36" name="notes"
                                placeholder="Example: Student needs help with multiplication, fractions, homework confidence, or test preparation."></textarea>
                        </div>

                        <input type="hidden" name="paypal_order_id" id="paypalOrderId">
                        <input type="hidden" name="paypal_payer_name" id="paypalPayerName">

                        <div class="mt-8 rounded-[1.5rem] border border-purple-100 bg-purple-50 p-5">
                            <h3 class="text-lg font-black text-monty-black">
                                Before payment
                            </h3>
                            <p class="mt-2 text-sm leading-7 text-slate-600">
                                Please complete the form first. In the real backend version,
                                the system will validate this form, create a pending booking,
                                process PayPal payment, then confirm the booking after successful payment.
                            </p>
                        </div>
                    </form>
                </div>

                <aside class="checkout-sidebar">
                    <div class="selected-session-card">
                        <p class="section-label">Selected Session</p>

                        <h2 class="mt-3 text-3xl font-black text-monty-black">
                            {{ $booking['title'] }}
                        </h2>

                        <div class="mt-6 space-y-4">
                            <div class="summary-row">
                                <span>Subject</span>
                                <strong>{{ $booking['subject'] }}</strong>
                            </div>

                            <div class="summary-row">
                                <span>Type</span>
                                <strong>{{ $booking['mode'] }}</strong>
                            </div>

                            <div class="summary-row">
                                <span>Date</span>
                                <strong>{{ $booking['date'] }}</strong>
                            </div>

                            <div class="summary-row">
                                <span>Time</span>
                                <strong>{{ $booking['time'] }}</strong>
                            </div>

                            <div class="summary-row">
                                <span>Duration</span>
                                <strong>{{ $booking['duration'] }}</strong>
                            </div>

                            <div class="summary-row">
                                <span>Availability</span>
                                <strong>{{ $booking['spots'] }}</strong>
                            </div>
                        </div>

                        <div class="mt-6 rounded-[1.5rem] bg-monty-black p-5 text-white">
                            <div class="flex items-center justify-between gap-4">
                                <span class="text-sm font-bold text-slate-300">Total Payment</span>
                                <strong class="text-3xl font-black">${{ $booking['amount'] }}</strong>
                            </div>
                        </div>
                    </div>

                    <div class="payment-card">
                        <p class="section-label">Secure Payment</p>
                        <h3 class="mt-3 text-2xl font-black text-monty-black">
                            Pay with PayPal
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-slate-600">
                            Complete payment to confirm this selected tutoring session.
                        </p>

                        <div id="formWarning"
                            class="mt-5 hidden rounded-2xl border border-red-200 bg-red-50 p-4 text-sm font-bold leading-6 text-red-700">
                            Please complete all required form fields before payment.
                        </div>

                        <div id="paypal-button-container" class="mt-6"></div>

                        <div id="paymentSuccessBox" class="hidden mt-6 rounded-2xl border border-green-200 bg-green-50 p-5">
                            <h4 class="text-lg font-black text-green-700">Payment Successful</h4>
                            <p class="mt-2 text-sm leading-7 text-green-700">
                                Your PayPal payment was approved. In the backend version,
                                this booking will now be saved as confirmed.
                            </p>
                        </div>

                        <div id="paymentErrorBox" class="hidden mt-6 rounded-2xl border border-red-200 bg-red-50 p-5">
                            <h4 class="text-lg font-black text-red-700">Payment Error</h4>
                            <p class="mt-2 text-sm leading-7 text-red-700">
                                Something went wrong with PayPal payment. Please try again.
                            </p>
                        </div>
                    </div>

                    <a href="{{ route('book-now') }}"
                        class="mt-5 inline-flex w-full items-center justify-center rounded-full border border-slate-300 bg-white px-6 py-4 text-sm font-black text-monty-black transition hover:border-monty-purple hover:text-monty-purple">
                        Change Session
                    </a>
                </aside>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script
        src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id', 'test') }}&currency=USD"></script>

    <script>
        window.MontyCheckout = {
            amount: @json($booking['amount']),
            title: @json($booking['title']),
            subject: @json($booking['subject']),
        };
    </script>
@endpush