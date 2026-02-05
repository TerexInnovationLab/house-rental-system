@php
    $isDashboard = str_contains(trim($__env->yieldContent('body_class')), 'dashboard');
    $homeHref = auth()->check() ? '/dashboard' : '/';
@endphp

<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="w-full px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="{{ $homeHref }}" class="inline-flex items-center gap-2 -ml-1 sm:-ml-2 text-2xl font-display font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9-6 9 6v10a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1V10z"/>
                </svg>
                <span>ZikoSpace</span>
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
                    <a href="/browse" class="nav-link inline-flex items-center gap-2 text-gray-700 hover:text-purple-600 font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9.75L12 4l9 5.75V20a1 1 0 0 1-1 1h-5.5a.5.5 0 0 1-.5-.5V15a2 2 0 0 0-2-2h0a2 2 0 0 0-2 2v5.5a.5.5 0 0 1-.5.5H4a1 1 0 0 1-1-1V9.75z"/>
                        </svg>
                        <span>Buy</span>
                    </a>
                    <a href="/browse" class="nav-link inline-flex items-center gap-2 text-gray-700 hover:text-purple-600 font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h10M7 11h6m-6 4h10M6 21h12a2 2 0 0 0 2-2V7.5a2 2 0 0 0-.586-1.414l-3.5-3.5A2 2 0 0 0 14.5 2H6a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2z"/>
                        </svg>
                        <span>Rent</span>
                    </a>
                    <a href="/browse" class="nav-link inline-flex items-center gap-2 text-gray-700 hover:text-purple-600 font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9-6 9 6v10a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1V10z"/>
                        </svg>
                        <span>Properties</span>
                    </a>
                    <a href="/about" class="nav-link inline-flex items-center gap-2 text-gray-700 hover:text-purple-600 font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8h.01M11 12h1v4h1M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18z"/>
                        </svg>
                        <span>About</span>
                    </a>
                </div>
            @endguest

            <div class="flex items-center gap-3">
                @auth
                    <a href="/profile" class="w-9 h-9 rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 text-white flex items-center justify-center text-sm font-semibold hover:shadow-md transition" aria-label="Profile">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </a>
                    <span class="hidden sm:inline-flex items-center text-xs font-semibold text-emerald-700 bg-emerald-100 px-2.5 py-1 rounded-full">
                        You're signed in
                    </span>
                    <span class="text-sm font-medium text-gray-700 hidden sm:block">{{ auth()->user()->name }}</span>
                @endauth
                @guest
                    <a href="/signin" class="inline-flex items-center gap-2 text-gray-700 hover:text-purple-600 font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.75 8.25L19.5 12l-3.75 3.75M19.5 12H9M12 4.5H7.5a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 7.5 19.5H12"/>
                        </svg>
                        <span>Sign In</span>
                    </a>
                @endguest
            </div>
        </div>
    </div>
</nav>
