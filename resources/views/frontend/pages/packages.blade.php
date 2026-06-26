@extends('frontend.layouts.app')

@section('title', 'Packages | Monty Tutor')
@section('meta_description', 'View Monty Tutor tutoring packages for single sessions, weekly support, subject support, and premium academic growth plans.')

@section('content')

    <div class="package-page">



        <section class="section-white pt-44">
            <div class="page-container">

                <div class="section-heading-center">
                    <p class="section-label">Simple Pricing</p>

                    <h2 class="section-title mx-auto package-title">
                        Flexible packages for every learning need.
                    </h2>

                    <p class="section-desc mx-auto">
                        Start with one session or choose a consistent support plan. Each package is built
                        to help students understand the subject better and feel more confident.
                    </p>
                </div>

                <div class="mt-12 grid gap-6 lg:grid-cols-3">

                    <div class="pricing-card package-hover-card">
                        <div>

                            <p class="pricing-label">Starter</p>

                            <h2>Single Session</h2>

                            <p class="price">$49</p>

                            <p class="pricing-desc">
                                Best for homework help, a quick review, or trying the tutoring experience
                                before choosing a larger package.
                            </p>
                        </div>

                        <ul class="pricing-list">
                            <li>45 minute private session</li>
                            <li>One subject focus</li>
                            <li>Online or local tutoring support</li>
                            <li>Simple session summary</li>
                            <li>Good for quick academic help</li>
                        </ul>

                        <a href="{{ route('book-now') }}" class="btn-primary w-full justify-center">
                            Book Starter
                        </a>
                    </div>

                    <div class="pricing-card popular package-hover-card">

                        <div>

                            <p class="pricing-label">Growth</p>

                            <h2>4 Session Pack</h2>

                            <p class="price">$179</p>

                            <p class="pricing-desc">
                                Best for weekly support, subject improvement, homework confidence,
                                and steady academic progress.
                            </p>
                        </div>

                        <ul class="pricing-list">
                            <li>4 private tutoring sessions</li>
                            <li>Weekly learning focus</li>
                            <li>Homework and concept review</li>
                            <li>Parent progress summary</li>
                            <li>Best for consistent support</li>
                        </ul>

                        <a href="{{ route('book-now') }}" class="btn-primary w-full justify-center">
                            Book Growth
                        </a>
                    </div>

                    <div class="pricing-card package-hover-card">
                        <div>

                            <p class="pricing-label">Premium</p>

                            <h2>8 Session Pack</h2>

                            <p class="price">$329</p>

                            <p class="pricing-desc">
                                Best for deeper improvement, exam preparation, long-term confidence,
                                and structured academic growth.
                            </p>
                        </div>

                        <ul class="pricing-list">
                            <li>8 private tutoring sessions</li>
                            <li>Personalized learning pathway</li>
                            <li>Priority scheduling support</li>
                            <li>Detailed parent updates</li>
                            <li>Best for long-term improvement</li>
                        </ul>

                        <a href="{{ route('book-now') }}" class="btn-primary w-full justify-center">
                            Book Premium
                        </a>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-white">
            <div class="page-container">
                <div class="grid items-center gap-12 lg:grid-cols-2">

                    <div>
                        <p class="section-label">How To Choose</p>

                        <h2 class="section-title package-title">
                            Not sure which package is right?
                        </h2>

                        <p class="section-desc">
                            Choose based on how much support your student needs. A single session is great
                            for quick help. The Growth package is best for weekly improvement. The Premium
                            package is best when a student needs deeper support and a stronger routine.
                        </p>

                        <div class="mt-8 space-y-4">
                            <div class="package-guide-row package-hover-card">
                                <span>01</span>
                                <div>
                                    <h3>Choose Starter for quick help</h3>
                                    <p>Best for homework, one difficult topic, or trying the tutor first.</p>
                                </div>
                            </div>

                            <div class="package-guide-row package-hover-card">
                                <span>02</span>
                                <div>
                                    <h3>Choose Growth for weekly progress</h3>
                                    <p>Best for students who need steady practice and regular support.</p>
                                </div>
                            </div>

                            <div class="package-guide-row package-hover-card">
                                <span>03</span>
                                <div>
                                    <h3>Choose Premium for long-term improvement</h3>
                                    <p>Best for exam preparation, confidence rebuilding, and deeper learning.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="package-image-card package-hover-card">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=1200&q=85"
                            alt="Tutor helping students">

                        <div class="package-image-note">
                            <p class="section-label">Parent Friendly</p>
                            <h3>Clear packages make the booking decision easier.</h3>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="compare-packages" class="section-soft">
            <div class="page-container">
                <div class="package-table-card package-hover-card">
                    <div class="mb-8">
                        <p class="section-label">Package Comparison</p>

                        <h2 class="mt-3 text-3xl font-bold text-monty-black">
                            Compare what each plan includes.
                        </h2>

                        <p class="mt-3 max-w-2xl text-base leading-7 text-slate-600">
                            This table helps parents quickly understand which package gives the right
                            level of support for their student.
                        </p>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="premium-table package-table">
                            <thead>
                                <tr>
                                    <th>Feature</th>
                                    <th>Starter</th>
                                    <th>Growth</th>
                                    <th>Premium</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Private session</td>
                                    <td>1 session</td>
                                    <td>4 sessions</td>
                                    <td>8 sessions</td>
                                </tr>

                                <tr>
                                    <td>Session duration</td>
                                    <td>45 minutes</td>
                                    <td>45 minutes each</td>
                                    <td>45 minutes each</td>
                                </tr>

                                <tr>
                                    <td>Learning plan</td>
                                    <td>Basic focus</td>
                                    <td>Weekly plan</td>
                                    <td>Personalized pathway</td>
                                </tr>

                                <tr>
                                    <td>Progress summary</td>
                                    <td>Basic</td>
                                    <td>Included</td>
                                    <td>Detailed</td>
                                </tr>

                                <tr>
                                    <td>Priority booking</td>
                                    <td>No</td>
                                    <td>Standard</td>
                                    <td>Yes</td>
                                </tr>

                                <tr>
                                    <td>Best for</td>
                                    <td>Quick help</td>
                                    <td>Weekly support</td>
                                    <td>Long-term growth</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-white">
            <div class="page-container">
                <div class="section-heading-center">
                    <p class="section-label">What Happens After Booking?</p>

                    <h2 class="section-title mx-auto package-title">
                        A clear process after you choose a package.
                    </h2>

                    <p class="section-desc mx-auto">
                        The booking process is designed to feel simple and trustworthy from package
                        selection to payment confirmation.
                    </p>
                </div>

                <div class="mt-12 grid gap-6 md:grid-cols-3">
                    <div class="package-step-card package-hover-card">
                        <span>1</span>
                        <h3>Choose a session</h3>
                        <p>Select an available tutoring session from the booking calendar.</p>
                    </div>

                    <div class="package-step-card package-hover-card">
                        <span>2</span>
                        <h3>Submit details</h3>
                        <p>Fill in parent information, student grade, subject, and learning needs.</p>
                    </div>

                    <div class="package-step-card package-hover-card">
                        <span>3</span>
                        <h3>Confirm payment</h3>
                        <p>Pay through PayPal to confirm the booking and secure the session.</p>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.partials.page-cta')

    </div>

@endsection