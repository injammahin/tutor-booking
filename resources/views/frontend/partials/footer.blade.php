<footer class="relative overflow-hidden bg-monty-black text-white">
    <div
        class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(91,27,139,0.35),transparent_35%),radial-gradient(circle_at_bottom_right,rgba(91,27,139,0.22),transparent_30%)]">
    </div>

    <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[1.4fr_0.8fr_0.8fr_1fr]">

            <div>
                <img src="{{ asset('/image/logo.png') }}" alt="Monty Tutor"
                    class="h-20 w-auto object-contain brightness-110">

                <p class="mt-6 max-w-md text-base leading-8 text-slate-300">
                    Premium tutoring support designed to help students understand clearly,
                    build confidence, and improve through a structured learning plan.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <span class="footer-pill">1-on-1 Tutoring</span>
                    <span class="footer-pill">Academic Support</span>
                    <span class="footer-pill">Test Prep</span>
                </div>
            </div>

            <div>
                <h3 class="footer-title">Explore</h3>
                <div class="footer-links">
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('packages') }}">Packages</a>
                    <a href="{{ route('book-now') }}">Book Now</a>
                    <a href="{{ route('faq') }}">FAQ</a>
                </div>
            </div>

            <div>
                <h3 class="footer-title">Subjects</h3>
                <div class="footer-links">
                    <a href="{{ route('packages') }}">Math Tutoring</a>
                    <a href="{{ route('packages') }}">Reading Support</a>
                    <a href="{{ route('packages') }}">Writing Coaching</a>
                    <a href="{{ route('packages') }}">Homework Help</a>
                </div>
            </div>

            <div>
                <h3 class="footer-title">Contact</h3>
                <div class="mt-5 space-y-4 text-sm leading-7 text-slate-300">
                    <p>Email: hello@montytutor.com</p>
                    <p>Phone: +1 000 000 0000</p>
                    <p>Online and local tutoring sessions available.</p>
                </div>

                <a href="{{ route('book-now') }}"
                    class="mt-7 inline-flex rounded-full bg-white px-6 py-3 text-sm font-black text-monty-purple transition hover:bg-purple-50">
                    Book a Session
                </a>
            </div>
        </div>
    </div>

    <div class="relative border-t border-white/10 px-4 py-6 text-center text-sm text-slate-400">
        © {{ date('Y') }} Monty Tutor. All rights reserved.
    </div>
</footer>