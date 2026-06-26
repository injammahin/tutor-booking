@php
    $navItems = [
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Packages', 'route' => 'packages'],
        ['label' => 'Book Now', 'route' => 'book-now'],
        ['label' => 'FAQ', 'route' => 'faq'],
        ['label' => 'Contact Me', 'route' => 'contact'],
    ];
@endphp

<header id="siteHeader"
    class="fixed left-0 top-0 z-50 w-full border-b border-slate-200/70 bg-white/90 backdrop-blur-2xl transition-all duration-300">

    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">

        <a href="{{ route('home') }}" class="flex min-w-0 items-center gap-3">
            <img src="{{ asset('/image/logo.png') }}" alt="Monty Tutor" class="h-24 w-auto object-contain sm:h-20"
                onerror="this.classList.add('hidden'); document.getElementById('logoFallback').classList.remove('hidden');">

            {{-- <div id="logoFallback" class="hidden items-center gap-3">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-2xl bg-monty-purple text-xl font-black text-white shadow-lg shadow-purple-900/20">
                    M
                </div>
                <div>
                    <p class="text-xl font-black uppercase tracking-wide text-monty-purple">Monty Tutor</p>
                    <p class="hidden text-xs font-bold uppercase tracking-[0.22em] text-slate-500 sm:block">
                        Academic Confidence
                    </p>
                </div>
            </div> --}}
        </a>

        <nav class="hidden items-center gap-9 lg:flex">
            @foreach ($navItems as $item)
                <a href="{{ route($item['route']) }}"
                    class="site-nav-link {{ request()->routeIs($item['route']) ? 'is-active' : '' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="hidden items-center gap-3 lg:flex">

            <a href="{{ route('book-now') }}" class="header-book-btn">
                Start Booking
            </a>
        </div>

        <button id="mobileMenuBtn" type="button" aria-label="Open Menu"
            class="inline-flex h-12 w-12 items-center justify-center rounded-2xl border border-slate-200 bg-white text-2xl font-black text-monty-black shadow-sm lg:hidden">
            <span id="menuIcon">☰</span>
        </button>
    </div>

    <div id="mobileMenu" class="hidden border-t border-slate-100 bg-white px-4 py-5 shadow-2xl lg:hidden">
        <div class="flex flex-col gap-2">
            @foreach ($navItems as $item)
                <a href="{{ route($item['route']) }}"
                    class="mobile-nav-link-custom {{ request()->routeIs($item['route']) ? 'is-active' : '' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach

            <a href="{{ route('book-now') }}"
                class="mt-3 inline-flex items-center justify-center rounded-2xl bg-monty-purple px-5 py-4 text-[15px] font-black text-white shadow-lg shadow-purple-900/20">
                Start Booking
            </a>
        </div>
    </div>
</header>