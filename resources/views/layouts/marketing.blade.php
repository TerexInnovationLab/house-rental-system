<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ZikoSpace')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    @yield('styles')
</head>
<body>
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
</body>
</html>
