<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ZikoSpace')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style>
        .dashboard .dashboard-sidebar {
            transform: translateX(-100%);
        }
        .dashboard.sidebar-open .dashboard-sidebar {
            transform: translateX(0);
        }
        .dashboard .dashboard-overlay {
            display: none;
        }
        .dashboard.sidebar-open .dashboard-overlay {
            display: block;
        }
        @media (min-width: 768px) {
            .dashboard main,
            .dashboard footer {
                margin-left: 0;
            }
            .dashboard.sidebar-open main,
            .dashboard.sidebar-open footer {
                margin-left: 16rem;
            }
        }
    </style>
    @yield('styles')
</head>
<body class="@yield('body_class')">
    @include('layouts.partials.navbar')

    @yield('content')

    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-display font-bold text-white mb-4">ZikoSpace</h3>
                    <p class="text-gray-400">Your trusted platform for finding and listing properties</p>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-4">For Tenants</h4>
                    <ul class="space-y-2">
                        <li><a href="/browse" class="hover:text-white transition">Browse Properties</a></li>
                        <li><a href="/signin" class="hover:text-white transition">Saved Searches</a></li>
                        <li><a href="/about" class="hover:text-white transition">How It Works</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-4">For Landlords</h4>
                    <ul class="space-y-2">
                        <li><a href="/add-property" class="hover:text-white transition">List Property</a></li>
                        <li><a href="/landlord-dashboard" class="hover:text-white transition">Pricing</a></li>
                        <li><a href="/landlord-dashboard" class="hover:text-white transition">Resources</a></li>
                    </ul>
                </div>

                @guest
                    <div>
                        <h4 class="font-semibold text-white mb-4">Company</h4>
                        <ul class="space-y-2">
                            <li><a href="/about" class="hover:text-white transition">About Us</a></li>
                            <li><a href="/admin-dashboard" class="hover:text-white transition">Contact</a></li>
                            <li><a href="/" class="hover:text-white transition">Privacy Policy</a></li>
                        </ul>
                    </div>
                @endguest
            </div>

            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                @auth
                    <p class="text-sm text-emerald-300 font-medium">You're signed in</p>
                @endauth
                <p>&copy; 2026 ZikoSpace. Built by Terex Innovation. All rights reserved.</p>
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
                    if (link.classList.contains('sidebar-link')) {
                        link.classList.add('active');
                    } else {
                        link.classList.add('text-purple-600', 'font-semibold');
                    }
                }
            });

            var toggle = document.getElementById('dashboard-toggle');
            var overlay = document.querySelector('.dashboard-overlay');
            var sidebar = document.querySelector('.dashboard-sidebar');
            var isDashboard = document.body.classList.contains('dashboard');

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
        })();
    </script>
</body>
</html>
