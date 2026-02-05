@extends('layouts.marketing')

@section('title', 'ZikoSpace - Find Your Perfect Space')

@section('content')
<div class="hero-gradient relative overflow-hidden bg-gradient-to-br from-purple-700 via-indigo-700 to-violet-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-white">
                <h2 class="text-5xl md:text-6xl font-display font-bold mb-6 leading-tight">
                    Find Your Perfect Space
                </h2>
                <p class="text-xl text-white/90 mb-8 leading-relaxed">
                    Discover houses, apartments, hotels, farms, and land for rent or purchase. Your dream property is just a search away.
                </p>

                <div class="grid grid-cols-3 gap-6 mt-12">
                    <div>
                        <div class="text-4xl font-bold">10K+</div>
                        <div class="text-white/70 text-sm mt-1">Properties</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold">5K+</div>
                        <div class="text-white/70 text-sm mt-1">Landlords</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold">15K+</div>
                        <div class="text-white/70 text-sm mt-1">Happy Tenants</div>
                    </div>
                </div>
            </div>

            <div class="floating">
                <div class="bg-white rounded-3xl p-8 shadow-2xl">
                    <h3 class="text-2xl font-display font-semibold mb-4 text-gray-900">Start Your Search</h3>
                    <p class="text-gray-600 mb-6">
                        Use our dedicated search experience to filter by location, price, amenities, and more.
                    </p>
                    <a href="/browse" class="block text-center w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-4 rounded-xl font-semibold text-lg hover:shadow-xl transition-all">
                        Browse Properties
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-purple-400 rounded-full opacity-20 blur-3xl"></div>
    <div class="absolute -top-10 -right-10 w-60 h-60 bg-indigo-400 rounded-full opacity-20 blur-3xl"></div>
</div>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-display font-bold text-gray-900 mb-4">Browse by Category</h2>
        <p class="text-xl text-gray-600">Find the perfect property type for your needs</p>
    </div>

    <div class="grid md:grid-cols-3 lg:grid-cols-6 gap-6">
        <div class="feature-card border border-gray-100 rounded-2xl p-6 text-center hover:shadow-xl transition-all cursor-pointer group">
            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-600 transition">
                <svg class="w-8 h-8 text-purple-600 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
            </div>
            <h3 class="font-semibold text-gray-900 mb-1">Houses</h3>
            <p class="text-sm text-gray-500">2,456 listings</p>
        </div>

        <div class="feature-card border border-gray-100 rounded-2xl p-6 text-center hover:shadow-xl transition-all cursor-pointer group">
            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-indigo-600 transition">
                <svg class="w-8 h-8 text-indigo-600 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
            <h3 class="font-semibold text-gray-900 mb-1">Apartments</h3>
            <p class="text-sm text-gray-500">3,891 listings</p>
        </div>

        <div class="feature-card border border-gray-100 rounded-2xl p-6 text-center hover:shadow-xl transition-all cursor-pointer group">
            <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-pink-600 transition">
                <svg class="w-8 h-8 text-pink-600 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>
                </svg>
            </div>
            <h3 class="font-semibold text-gray-900 mb-1">Hotels</h3>
            <p class="text-sm text-gray-500">567 listings</p>
        </div>

        <div class="feature-card border border-gray-100 rounded-2xl p-6 text-center hover:shadow-xl transition-all cursor-pointer group">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-600 transition">
                <svg class="w-8 h-8 text-green-600 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                </svg>
            </div>
            <h3 class="font-semibold text-gray-900 mb-1">Farms</h3>
            <p class="text-sm text-gray-500">234 listings</p>
        </div>

        <div class="feature-card border border-gray-100 rounded-2xl p-6 text-center hover:shadow-xl transition-all cursor-pointer group">
            <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-600 transition">
                <svg class="w-8 h-8 text-amber-600 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                </svg>
            </div>
            <h3 class="font-semibold text-gray-900 mb-1">Land</h3>
            <p class="text-sm text-gray-500">1,123 listings</p>
        </div>

        <div class="feature-card border border-gray-100 rounded-2xl p-6 text-center hover:shadow-xl transition-all cursor-pointer group">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-600 transition">
                <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <h3 class="font-semibold text-gray-900 mb-1">Commercial</h3>
            <p class="text-sm text-gray-500">789 listings</p>
        </div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-4xl font-display font-bold text-gray-900 mb-4">Featured Properties</h2>
                <p class="text-xl text-gray-600">Hand-picked properties just for you</p>
            </div>
            <a href="/browse" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                View All ->
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="property-card bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100">
                <div class="relative">
                    <div class="h-56 bg-gradient-to-br from-purple-200 to-indigo-300"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-medium">For Rent</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        @auth
                            <button class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50 transition" aria-label="Save listing">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        @endauth
                        @guest
                            <a href="/signin" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50 transition" aria-label="Sign in to save listing">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </a>
                        @endguest
                    </div>
                    <div class="absolute bottom-4 right-4">
                        <div class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-sm font-semibold text-gray-900">
                            $1,200/mo
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Modern Downtown Apartment</h3>
                    <p class="text-gray-600 mb-4 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Downtown, Lilongwe
                    </p>
                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            2 Beds
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            2 Baths
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                            </svg>
                            1,200 sq ft
                        </span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center text-xs font-semibold text-purple-600">
                                JD
                            </div>
                            <span class="ml-2 text-sm text-gray-600">John Doe</span>
                        </div>
                        <a href="/property-detail" class="text-purple-600 font-medium hover:text-purple-700 transition">
                            View Details ->
                        </a>
                    </div>
                </div>
            </div>

            <div class="property-card bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100">
                <div class="relative">
                    <div class="h-56 bg-gradient-to-br from-green-200 to-teal-300"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">For Sale</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        @auth
                            <button class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50 transition" aria-label="Save listing">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        @endauth
                        @guest
                            <a href="/signin" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50 transition" aria-label="Sign in to save listing">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </a>
                        @endguest
                    </div>
                    <div class="absolute bottom-4 right-4">
                        <div class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-sm font-semibold text-gray-900">
                            $350,000
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Spacious Family House</h3>
                    <p class="text-gray-600 mb-4 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Area 47, Lilongwe
                    </p>
                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            4 Beds
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            3 Baths
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                            </svg>
                            2,800 sq ft
                        </span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center text-xs font-semibold text-green-600">
                                SM
                            </div>
                            <span class="ml-2 text-sm text-gray-600">Sarah M.</span>
                        </div>
                        <a href="/property-detail" class="text-purple-600 font-medium hover:text-purple-700 transition">
                            View Details ->
                        </a>
                    </div>
                </div>
            </div>

            <div class="property-card bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100">
                <div class="relative">
                    <div class="h-56 bg-gradient-to-br from-amber-200 to-orange-300"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-amber-600 text-white px-3 py-1 rounded-full text-sm font-medium">For Rent</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        @auth
                            <button class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50 transition" aria-label="Save listing">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        @endauth
                        @guest
                            <a href="/signin" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50 transition" aria-label="Sign in to save listing">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </a>
                        @endguest
                    </div>
                    <div class="absolute bottom-4 right-4">
                        <div class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-sm font-semibold text-gray-900">
                            $45,000/yr
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Prime Agricultural Farm</h3>
                    <p class="text-gray-600 mb-4 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Salima District
                    </p>
                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                            </svg>
                            50 Acres
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                            </svg>
                            Irrigation
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Farmhouse
                        </span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center text-xs font-semibold text-amber-600">
                                PK
                            </div>
                            <span class="ml-2 text-sm text-gray-600">Peter K.</span>
                        </div>
                        <a href="/property-detail" class="text-purple-600 font-medium hover:text-purple-700 transition">
                            View Details ->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-display font-bold text-gray-900 mb-4">How It Works</h2>
        <p class="text-xl text-gray-600">Simple steps to find your perfect property</p>
    </div>

    <div class="grid md:grid-cols-4 gap-8">
        <div class="text-center">
            <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                <span class="text-3xl font-bold text-white">1</span>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-3">Search Properties</h3>
            <p class="text-gray-600">Browse through thousands of verified listings in your desired location</p>
        </div>

        <div class="text-center">
            <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                <span class="text-3xl font-bold text-white">2</span>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-3">Schedule Viewing</h3>
            <p class="text-gray-600">Book a convenient time to view the property with the landlord</p>
        </div>

        <div class="text-center">
            <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                <span class="text-3xl font-bold text-white">3</span>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-3">Apply and Review</h3>
            <p class="text-gray-600">Submit your application and wait for landlord approval</p>
        </div>

        <div class="text-center">
            <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                <span class="text-3xl font-bold text-white">4</span>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-3">Move In</h3>
            <p class="text-gray-600">Sign the lease, complete payment, and move into your new space</p>
        </div>
    </div>
</section>

<section class="hero-gradient py-20 bg-gradient-to-br from-purple-700 via-indigo-700 to-violet-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6">
            Ready to Find Your Perfect Property?
        </h2>
        <p class="text-xl text-white/85 mb-8">
            Join thousands of happy tenants and landlords on ZikoSpace
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/signup" class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transition-all">
                Get Started
            </a>
            <a href="/add-property" class="bg-purple-800 text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-purple-900 transition-all">
                List Your Property
            </a>
        </div>
    </div>
</section>
@endsection
