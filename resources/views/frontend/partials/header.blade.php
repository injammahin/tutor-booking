@php
    $navItems = [
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Services', 'route' => 'services'],
        ['label' => 'Packages', 'route' => 'packages'],
        ['label' => 'Book Now', 'route' => 'book-now'],
        ['label' => 'FAQ', 'route' => 'faq'],
        ['label' => 'Contact Me', 'route' => 'contact'],
    ];
@endphp

<header id="siteHeader"
    class="fixed left-0 top-0 z-50 w-full border-b border-white/10 bg-[#050505]/95 backdrop-blur-2xl transition-all duration-300">

    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">

        <a href="{{ route('home') }}" class="flex min-w-0 items-center gap-3">
            <img src="{{ asset('image/logo.png') }}" alt="Monty Tutor"
                class="h-20 w-auto object-contain sm:h-20 lg:h-24"
                onerror="this.classList.add('hidden'); document.getElementById('logoFallback').classList.remove('hidden');">

            <div id="logoFallback" class="hidden items-center gap-3">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-[7px] bg-monty-purple text-xl font-bold text-white shadow-lg shadow-purple-900/20">
                    M
                </div>

                <div>
                    <p class="text-xl font-bold uppercase tracking-wide text-white">
                        Monty Tutor
                    </p>

                    <p class="hidden text-xs font-bold uppercase tracking-[0.22em] text-purple-200 sm:block">
                        Academic Confidence
                    </p>
                </div>
            </div>
        </a>

        <nav class="hidden items-center gap-9 lg:flex">
            @foreach ($navItems as $item)
                <a href="{{ route($item['route']) }}"
                    class="site-nav-link dark-header-link {{ request()->routeIs($item['route']) ? 'is-active' : '' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="hidden items-center gap-3 lg:flex">
            <a href="{{ route('book-now') }}" class="header-book-btn dark-header-book-btn">
                Start Booking
            </a>
        </div>

        <button id="mobileMenuBtn" type="button" aria-label="Open Menu"
            class="inline-flex h-12 w-12 items-center justify-center rounded-[7px] border border-white/15 bg-white/10 text-2xl font-bold text-white shadow-sm transition hover:bg-white/15 lg:hidden">
            <span id="menuIcon">☰</span>
        </button>
    </div>

    <div id="mobileMenu" class="hidden border-t border-white/10 bg-[#050505] px-4 py-5 shadow-2xl lg:hidden">
        <div class="flex flex-col gap-2">
            @foreach ($navItems as $item)
                <a href="{{ route($item['route']) }}"
                    class="mobile-nav-link-custom dark-mobile-link {{ request()->routeIs($item['route']) ? 'is-active' : '' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach

            <a href="{{ route('book-now') }}"
                class="mt-3 inline-flex items-center justify-center rounded-[7px] bg-monty-purple px-5 py-4 text-[15px] font-bold text-white shadow-lg shadow-purple-900/20 transition hover:bg-monty-darkPurple">
                Start Booking
            </a>
        </div>
    </div>
</header>