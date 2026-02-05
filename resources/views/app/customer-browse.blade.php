@extends('layouts.dashboard')

@section('title', 'Search Results - ZikoSpace')

@section('dashboard')
<section class="hero-gradient py-10 bg-gradient-to-br from-purple-700 via-indigo-700 to-violet-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @guest
            <div class="mb-6 rounded-2xl border border-white/40 bg-white/70 backdrop-blur px-6 py-4 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <p class="text-sm uppercase tracking-[0.3em] text-purple-700 mb-1">Save & Apply</p>
                    <p class="text-gray-700">Sign in to save listings, message landlords, and submit applications.</p>
                </div>
                <a href="/signin" class="inline-flex items-center justify-center px-6 py-2.5 rounded-xl bg-slate-900 text-white font-semibold hover:bg-slate-800 transition">
                    Sign in
                </a>
            </div>
        @endguest
        <div class="bg-white rounded-2xl shadow-2xl p-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                    <input type="text" placeholder="City, neighborhood" value="Lilongwe" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Property Type</label>
                    <select class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                        <option>All Types</option>
                        <option selected>Apartment</option>
                        <option>House</option>
                        <option>Hotel</option>
                        <option>Farm</option>
                        <option>Land</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Price Range</label>
                    <select class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                        <option>Any Price</option>
                        <option>$0 - $500</option>
                        <option selected>$500 - $1,500</option>
                        <option>$1,500+</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3 rounded-lg hover:shadow-lg transition font-medium">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex flex-col lg:flex-row gap-8">
        <aside class="lg:w-1/4">
            <div class="bg-white rounded-xl shadow-md p-6 sticky top-24">
                <h3 class="text-xl font-semibold text-gray-900 mb-6">Filters</h3>

                <div class="mb-6">
                    <h4 class="font-semibold text-gray-700 mb-3">Listing Type</h4>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" checked class="w-4 h-4 text-purple-600 rounded">
                            <span class="ml-2 text-gray-700">For Rent</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="w-4 h-4 text-purple-600 rounded">
                            <span class="ml-2 text-gray-700">For Sale</span>
                        </label>
                    </div>
                </div>

                <div class="mb-6">
                    <h4 class="font-semibold text-gray-700 mb-3">Bedrooms</h4>
                    <div class="flex flex-wrap gap-2">
                        <button class="px-4 py-2 border border-gray-200 rounded-lg hover:border-purple-600 hover:bg-purple-50 transition">Any</button>
                        <button class="px-4 py-2 bg-purple-600 text-white rounded-lg">1+</button>
                        <button class="px-4 py-2 border border-gray-200 rounded-lg hover:border-purple-600 hover:bg-purple-50 transition">2+</button>
                        <button class="px-4 py-2 border border-gray-200 rounded-lg hover:border-purple-600 hover:bg-purple-50 transition">3+</button>
                    </div>
                </div>

                <div class="mb-6">
                    <h4 class="font-semibold text-gray-700 mb-3">Amenities</h4>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" checked class="w-4 h-4 text-purple-600 rounded">
                            <span class="ml-2 text-gray-700">Parking</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" checked class="w-4 h-4 text-purple-600 rounded">
                            <span class="ml-2 text-gray-700">Air Conditioning</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="w-4 h-4 text-purple-600 rounded">
                            <span class="ml-2 text-gray-700">Pool</span>
                        </label>
                    </div>
                </div>

                <button class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 rounded-lg hover:shadow-lg transition font-medium">
                    Apply Filters
                </button>
                <button class="w-full mt-2 text-gray-600 hover:text-purple-600 transition">Clear All</button>
            </div>
        </aside>

        <div class="lg:w-3/4">
            <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-display font-bold text-gray-900">147 Properties Found</h2>
                        <p class="text-gray-600 mt-1">Properties for rent in Lilongwe</p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <select class="px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                            <option>Sort by: Featured</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest First</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                    <div class="relative h-56 bg-gradient-to-br from-purple-200 to-indigo-300">
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
                    </div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-2">
                            <h3 class="text-xl font-semibold text-gray-900">Modern Downtown Loft</h3>
                            <span class="text-lg font-bold text-purple-600">$1,850/mo</span>
                        </div>
                        <p class="text-gray-600 mb-4">Downtown, Lilongwe</p>
                        <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                            <span>2 Beds</span>
                            <span>2 Baths</span>
                            <span>1,200 sq ft</span>
                        </div>
                        <a href="/property-detail" class="block text-center bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 rounded-lg hover:shadow-lg transition font-medium">View Details</a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                    <div class="relative h-56 bg-gradient-to-br from-green-200 to-teal-300">
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
                    </div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-2">
                            <h3 class="text-xl font-semibold text-gray-900">Cozy Studio Apartment</h3>
                            <span class="text-lg font-bold text-purple-600">$1,200/mo</span>
                        </div>
                        <p class="text-gray-600 mb-4">Area 47, Lilongwe</p>
                        <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                            <span>1 Bed</span>
                            <span>1 Bath</span>
                            <span>650 sq ft</span>
                        </div>
                        <a href="/property-detail" class="block text-center bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 rounded-lg hover:shadow-lg transition font-medium">View Details</a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                    <div class="relative h-56 bg-gradient-to-br from-amber-200 to-orange-300">
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
                    </div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-2">
                            <h3 class="text-xl font-semibold text-gray-900">Luxury Family Home</h3>
                            <span class="text-lg font-bold text-purple-600">$3,500/mo</span>
                        </div>
                        <p class="text-gray-600 mb-4">Area 43, Lilongwe</p>
                        <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                            <span>4 Beds</span>
                            <span>3 Baths</span>
                            <span>2,400 sq ft</span>
                        </div>
                        <a href="/property-detail" class="block text-center bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 rounded-lg hover:shadow-lg transition font-medium">View Details</a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                    <div class="relative h-56 bg-gradient-to-br from-blue-200 to-cyan-300">
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
                    </div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-2">
                            <h3 class="text-xl font-semibold text-gray-900">Spacious 3BR Apartment</h3>
                            <span class="text-lg font-bold text-purple-600">$2,400/mo</span>
                        </div>
                        <p class="text-gray-600 mb-4">City Center, Lilongwe</p>
                        <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>1,800 sq ft</span>
                        </div>
                        <a href="/property-detail" class="block text-center bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 rounded-lg hover:shadow-lg transition font-medium">View Details</a>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center">
                <nav class="flex items-center gap-2">
                    <button class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-purple-50 hover:border-purple-600 transition">Prev</button>
                    <button class="px-4 py-2 bg-purple-600 text-white rounded-lg">1</button>
                    <button class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-purple-50 hover:border-purple-600 transition">2</button>
                    <button class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-purple-50 hover:border-purple-600 transition">3</button>
                    <button class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-purple-50 hover:border-purple-600 transition">Next</button>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection

