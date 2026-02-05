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
<body>
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <a href="/" class="text-3xl font-display font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">
                        PropertyHub
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/search-results" class="nav-link text-gray-700 hover:text-purple-600 font-medium">Buy</a>
                    <a href="/search-results" class="nav-link text-gray-700 hover:text-purple-600 font-medium">Rent</a>
                    <a href="/search-results" class="nav-link text-gray-700 hover:text-purple-600 font-medium">Properties</a>
                    <a href="/" class="nav-link text-gray-700 hover:text-purple-600 font-medium">About</a>
                </div>

                <div class="flex items-center space-x-4">
                    <a href="/signin" class="text-gray-700 hover:text-purple-600 font-medium">Sign In</a>
                    <a href="/add-property" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-2.5 rounded-full hover:shadow-lg transition-all">
                        List Property
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-display font-bold text-white mb-4">PropertyHub</h3>
                    <p class="text-gray-400">Your trusted platform for finding and listing properties</p>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-4">For Tenants</h4>
                    <ul class="space-y-2">
                        <li><a href="/search-results" class="hover:text-white transition">Browse Properties</a></li>
                        <li><a href="/customer-dashboard" class="hover:text-white transition">Saved Searches</a></li>
                        <li><a href="/" class="hover:text-white transition">How It Works</a></li>
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

                <div>
                    <h4 class="font-semibold text-white mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="hover:text-white transition">About Us</a></li>
                        <li><a href="/admin-dashboard" class="hover:text-white transition">Contact</a></li>
                        <li><a href="/" class="hover:text-white transition">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; 2026 PropertyHub. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
