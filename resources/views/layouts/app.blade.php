<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PropertyHub')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    @yield('styles')
</head>
<body class="bg-slate-50 @yield('body_class')">
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="text-2xl font-display font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">
                    PropertyHub
                </a>
                <button id="dashboard-toggle" class="md:hidden p-2 rounded-lg border border-gray-200 text-gray-600 hover:text-purple-600 hover:border-purple-300 transition">
                    <span class="sr-only">Toggle sidebar</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                <div class="hidden md:flex items-center gap-6">
                    <a href="/search-results" class="nav-link js-nav-link text-gray-700 hover:text-purple-600 font-medium">Browse</a>
                    <a href="/messages" class="nav-link js-nav-link text-gray-700 hover:text-purple-600 font-medium">Messages</a>
                    <a href="/profile" class="nav-link js-nav-link text-gray-700 hover:text-purple-600 font-medium">Profile</a>
                    <a href="/customer-dashboard" class="nav-link js-nav-link text-gray-700 hover:text-purple-600 font-medium">Dashboard</a>
                </div>
                <div class="flex items-center gap-3">
                    <div class="hidden md:flex items-center gap-2">
                        <span class="text-xs uppercase tracking-[0.2em] text-gray-400">Role</span>
                        <select
                            class="text-sm border border-gray-200 rounded-lg px-3 py-1.5 bg-white text-gray-700 focus:ring-2 focus:ring-purple-200 focus:border-purple-500"
                            onchange="if (this.value) window.location.href = this.value;"
                        >
                            <option value="">Select</option>
                            <option value="/landlord-dashboard">Landlord</option>
                            <option value="/customer-dashboard">Tenant</option>
                            <option value="/admin-dashboard">Admin</option>
                        </select>
                    </div>
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 text-white flex items-center justify-center text-sm font-semibold">
                        JD
                    </div>
                    <span class="text-sm font-medium text-gray-700 hidden sm:block">John Doe</span>
                </div>
            </div>
        </nav>
        <div class="md:hidden px-4 sm:px-6 lg:px-8 pb-3">
            <label class="block text-xs uppercase tracking-[0.2em] text-gray-400 mb-2">Role</label>
            <select
                class="w-full text-sm border border-gray-200 rounded-lg px-3 py-2 bg-white text-gray-700 focus:ring-2 focus:ring-purple-200 focus:border-purple-500"
                onchange="if (this.value) window.location.href = this.value;"
            >
                <option value="">Select</option>
                <option value="/landlord-dashboard">Landlord</option>
                <option value="/customer-dashboard">Tenant</option>
                <option value="/admin-dashboard">Admin</option>
            </select>
        </div>
    </header>

    @yield('content')

    <footer class="bg-white border-t border-gray-200 py-8 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-500">
            <p>&copy; 2026 PropertyHub. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-purple-600 transition">Privacy Policy</a>
                <a href="#" class="hover:text-purple-600 transition">Terms of Service</a>
                <a href="#" class="hover:text-purple-600 transition">Help</a>
            </div>
        </div>
    </footer>
    <script>
        (function () {
            var currentPath = window.location.pathname.replace(/\/$/, '');
            var links = document.querySelectorAll('.js-nav-link');
            links.forEach(function (link) {
                var href = link.getAttribute('href') || '';
                if (!href || href[0] === '#') {
                    return;
                }
                var linkPath = href.split('#')[0].replace(/\/$/, '');
                if (linkPath === currentPath) {
                    link.classList.add('text-purple-600', 'font-semibold');
                }
            });

            var toggle = document.getElementById('dashboard-toggle');
            var overlay = document.querySelector('.dashboard-overlay');
            var sidebar = document.querySelector('.dashboard-sidebar');
            var isDashboard = document.body.classList.contains('dashboard');
            var hoverMode = window.matchMedia('(min-width: 768px) and (hover: hover)').matches;
            var closeTimer;

            function openSidebar() {
                document.body.classList.add('sidebar-open');
            }
            function closeSidebar() {
                document.body.classList.remove('sidebar-open');
            }

            if (toggle && isDashboard) {
                toggle.addEventListener('click', function () {
                    document.body.classList.toggle('sidebar-open');
                });
            }
            if (overlay) {
                overlay.addEventListener('click', function () {
                    closeSidebar();
                });
            }

            if (isDashboard && sidebar) {
                sidebar.addEventListener('click', function (event) {
                    var target = event.target;
                    if (target && target.closest('a')) {
                        closeSidebar();
                    }
                });
            }

            if (isDashboard && hoverMode) {
                document.addEventListener('mousemove', function (event) {
                    if (event.clientX <= 12) {
                        openSidebar();
                        clearTimeout(closeTimer);
                        return;
                    }
                    var sidebarWidth = 256;
                    if (event.clientX > sidebarWidth + 24 && !sidebar.matches(':hover')) {
                        clearTimeout(closeTimer);
                        closeTimer = setTimeout(closeSidebar, 150);
                    }
                });
            }
        })();
    </script>
</body>
</html>
