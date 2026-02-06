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
<body class="bg-slate-50 @yield('body_class')">
    @include('layouts.partials.navbar')

    @yield('content')

    <footer class="bg-white border-t border-gray-200 py-8 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-500">
            <p>&copy; 2026 ZikoSpace. Built by Terex Innovation. All rights reserved.</p>
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
            var hoverMode = window.matchMedia('(min-width: 768px)').matches;
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
