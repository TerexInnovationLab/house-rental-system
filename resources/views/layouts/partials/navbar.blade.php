@php
    $isDashboard = str_contains(trim($__env->yieldContent('body_class')), 'dashboard');
    $homeHref = auth()->check() ? '/dashboard' : '/';
@endphp

<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="{{ $homeHref }}" class="text-2xl font-display font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">
                PropertyHub
            </a>

            @if ($isDashboard)
                <button id="dashboard-toggle" class="md:hidden p-2 rounded-lg border border-gray-200 text-gray-600 hover:text-purple-600 hover:border-purple-300 transition">
                    <span class="sr-only">Toggle sidebar</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            @endif

            @guest
                <div class="hidden md:flex items-center gap-6">
                    <a href="/browse" class="nav-link text-gray-700 hover:text-purple-600 font-medium">Buy</a>
                    <a href="/browse" class="nav-link text-gray-700 hover:text-purple-600 font-medium">Rent</a>
                    <a href="/browse" class="nav-link text-gray-700 hover:text-purple-600 font-medium">Properties</a>
                    <a href="/about" class="nav-link text-gray-700 hover:text-purple-600 font-medium">About</a>
                </div>
            @endguest

            <div class="flex items-center gap-3">
                @auth
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 text-white flex items-center justify-center text-sm font-semibold">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <span class="hidden sm:inline-flex items-center text-xs font-semibold text-emerald-700 bg-emerald-100 px-2.5 py-1 rounded-full">
                        You're signed in
                    </span>
                    <span class="text-sm font-medium text-gray-700 hidden sm:block">{{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('auth.logout') }}" class="hidden sm:block">
                        @csrf
                        <button type="submit" class="text-sm font-semibold text-gray-600 hover:text-purple-600">Sign out</button>
                    </form>
                @endauth
                @guest
                    <a href="/signin" class="text-gray-700 hover:text-purple-600 font-medium">Sign In</a>
                    <a href="/add-property" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-4 py-2 rounded-full hover:shadow-lg transition-all">
                        List Property
                    </a>
                @endguest
            </div>
        </div>
    </div>
</nav>
