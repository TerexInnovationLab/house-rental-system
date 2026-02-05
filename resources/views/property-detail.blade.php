@extends('layouts.marketing')

@section('title', 'Modern Downtown Apartment - PropertyHub')

@section('styles')
<style>
    .gallery-item {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .gallery-item:hover {
        transform: scale(1.02);
    }

    .sticky-sidebar {
        position: sticky;
        top: 100px;
    }

    .amenity-badge {
        transition: all 0.3s;
    }

    .amenity-badge:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.2);
    }
</style>
@endsection

@section('content')
<div class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex items-center text-sm text-gray-600">
            <a href="/" class="hover:text-purple-600">Home</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <a href="/property-detail" class="hover:text-purple-600">Apartments</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-gray-900">Downtown Lilongwe</span>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8">
        <div class="flex justify-between items-start mb-4">
            <div>
                <h1 class="text-4xl font-display font-bold text-gray-900 mb-2">Modern Downtown Apartment</h1>
                <p class="text-gray-600 flex items-center text-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Downtown, Lilongwe, Central Region
                </p>
            </div>
            <div class="text-right">
                <div class="text-3xl font-bold text-purple-600 mb-1">$1,200<span class="text-lg text-gray-600">/month</span></div>
                <div class="flex items-center gap-2">
                    <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">For Rent</span>
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Available</span>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-4 gap-4 mb-12">
        <div class="col-span-2 row-span-2">
            <div class="gallery-item h-full bg-gradient-to-br from-purple-300 to-indigo-400 rounded-2xl overflow-hidden cursor-pointer shadow-lg">
                <div class="h-full flex items-center justify-center text-white text-2xl font-semibold">
                    Main Photo
                </div>
            </div>
        </div>
        <div class="gallery-item h-48 bg-gradient-to-br from-blue-300 to-cyan-400 rounded-2xl overflow-hidden cursor-pointer shadow-md">
            <div class="h-full flex items-center justify-center text-white font-semibold">Photo 2</div>
        </div>
        <div class="gallery-item h-48 bg-gradient-to-br from-pink-300 to-rose-400 rounded-2xl overflow-hidden cursor-pointer shadow-md">
            <div class="h-full flex items-center justify-center text-white font-semibold">Photo 3</div>
        </div>
        <div class="gallery-item h-48 bg-gradient-to-br from-green-300 to-emerald-400 rounded-2xl overflow-hidden cursor-pointer shadow-md">
            <div class="h-full flex items-center justify-center text-white font-semibold">Photo 4</div>
        </div>
        <div class="relative gallery-item h-48 bg-gradient-to-br from-amber-300 to-orange-400 rounded-2xl overflow-hidden cursor-pointer shadow-md">
            <div class="h-full flex items-center justify-center text-white font-semibold">Photo 5</div>
            <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
                <span class="text-white text-xl font-semibold">+8 more</span>
            </div>
        </div>
    </div>

    <div class="grid lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-8">
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <div class="grid grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <div class="font-semibold text-gray-900">2 Beds</div>
                        <div class="text-sm text-gray-500">Bedrooms</div>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="font-semibold text-gray-900">2 Baths</div>
                        <div class="text-sm text-gray-500">Bathrooms</div>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                            </svg>
                        </div>
                        <div class="font-semibold text-gray-900">1,200</div>
                        <div class="text-sm text-gray-500">Sq Ft</div>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="font-semibold text-gray-900">March 1</div>
                        <div class="text-sm text-gray-500">Available</div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                <h2 class="text-2xl font-display font-bold text-gray-900 mb-4">About This Property</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Experience modern living in the heart of downtown Lilongwe. This beautifully designed 2-bedroom apartment offers the perfect blend of comfort, style, and convenience. With floor-to-ceiling windows that flood the space with natural light, premium finishes throughout, and a stunning open-plan layout, this home is ideal for professionals and small families.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Located in a secure, gated community with 24/7 security, backup power, and water supply. Walking distance to shopping centers, restaurants, and public transport. The apartment comes with covered parking for two vehicles and access to communal amenities including a swimming pool, gym, and landscaped gardens.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Amenities and Features</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="amenity-badge flex items-center gap-3 p-4 bg-purple-50 rounded-xl">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-medium text-gray-900">24/7 Security</span>
                    </div>
                    <div class="amenity-badge flex items-center gap-3 p-4 bg-indigo-50 rounded-xl">
                        <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-medium text-gray-900">Parking (2 spaces)</span>
                    </div>
                    <div class="amenity-badge flex items-center gap-3 p-4 bg-green-50 rounded-xl">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-medium text-gray-900">Backup Generator</span>
                    </div>
                    <div class="amenity-badge flex items-center gap-3 p-4 bg-blue-50 rounded-xl">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-medium text-gray-900">Water Storage</span>
                    </div>
                    <div class="amenity-badge flex items-center gap-3 p-4 bg-pink-50 rounded-xl">
                        <div class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-medium text-gray-900">High-Speed WiFi</span>
                    </div>
                    <div class="amenity-badge flex items-center gap-3 p-4 bg-amber-50 rounded-xl">
                        <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-medium text-gray-900">Swimming Pool</span>
                    </div>
                    <div class="amenity-badge flex items-center gap-3 p-4 bg-purple-50 rounded-xl">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-medium text-gray-900">Fitness Center</span>
                    </div>
                    <div class="amenity-badge flex items-center gap-3 p-4 bg-teal-50 rounded-xl">
                        <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-medium text-gray-900">Air Conditioning</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Location</h2>
                <div class="h-64 bg-gradient-to-br from-blue-200 to-cyan-300 rounded-xl mb-4 flex items-center justify-center">
                    <span class="text-gray-700 font-semibold">Map Integration Here</span>
                </div>
                <div class="grid md:grid-cols-2 gap-4 text-sm text-gray-600">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>5 min to City Center</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span>2 min to Supermarket</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <span>3 min to Business District</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span>Walking distance to restaurants</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">House Rules</h2>
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </div>
                        <span class="text-gray-700">No pets allowed</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </div>
                        <span class="text-gray-700">No smoking inside</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-700">Visitors allowed with prior notice</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-700">Quiet hours: 10 PM - 7 AM</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-1">
            <div class="sticky-sidebar space-y-6">
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="flex items-center gap-4 mb-6 pb-6 border-b border-gray-200">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-full flex items-center justify-center text-white text-xl font-bold">
                            JD
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-lg">John Doe</h3>
                            <div class="flex items-center gap-1 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="font-medium">4.8</span>
                                <span>(24 reviews)</span>
                            </div>
                        </div>
                    </div>

                    @auth
                        <button class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-4 rounded-xl font-semibold mb-3 hover:shadow-lg transition-all">
                            Schedule Viewing
                        </button>

                        <button class="w-full bg-white border-2 border-purple-600 text-purple-600 py-4 rounded-xl font-semibold mb-3 hover:bg-purple-50 transition-all">
                            Send Message
                        </button>
                        <a href="/customer/apply" class="block text-center w-full bg-slate-900 text-white py-4 rounded-xl font-semibold hover:bg-slate-800 transition-all">
                            Apply for this property
                        </a>
                    @endauth
                    @guest
                        <a href="/signin" class="block text-center w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-4 rounded-xl font-semibold mb-3 hover:shadow-lg transition-all">
                            Sign in to Schedule Viewing
                        </a>
                        <a href="/signin" class="block text-center w-full bg-white border-2 border-purple-600 text-purple-600 py-4 rounded-xl font-semibold mb-3 hover:bg-purple-50 transition-all">
                            Sign in to Send Message
                        </a>
                        <a href="/signin" class="block text-center w-full bg-slate-900 text-white py-4 rounded-xl font-semibold hover:bg-slate-800 transition-all">
                            Sign in to Apply
                        </a>
                    @endguest

                    <button class="w-full bg-gray-100 text-gray-700 py-4 rounded-xl font-semibold hover:bg-gray-200 transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Call Now
                    </button>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border border-purple-100">
                    <h3 class="font-semibold text-gray-900 mb-4">Pricing Details</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Monthly Rent</span>
                            <span class="font-semibold text-gray-900">$1,200</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Security Deposit</span>
                            <span class="font-semibold text-gray-900">$1,200</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Utilities (avg)</span>
                            <span class="font-semibold text-gray-900">$80/mo</span>
                        </div>
                        <div class="border-t border-purple-200 pt-3 flex justify-between">
                            <span class="font-semibold text-gray-900">Move-in Cost</span>
                            <span class="font-bold text-purple-600 text-lg">$2,400</span>
                        </div>
                    </div>
                </div>

                <button class="w-full text-red-600 py-3 text-sm font-medium hover:text-red-700 transition flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    Report this listing
                </button>
            </div>
        </div>
    </div>

    <div class="mt-20">
        <h2 class="text-3xl font-display font-bold text-gray-900 mb-8">Similar Properties</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 hover:shadow-xl transition-all">
                <div class="h-48 bg-gradient-to-br from-blue-200 to-cyan-300"></div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">City View Apartment</h3>
                    <p class="text-gray-600 text-sm mb-3">Area 43, Lilongwe</p>
                    <div class="flex justify-between items-center">
                        <span class="text-purple-600 font-bold">$1,100/mo</span>
                        <span class="text-sm text-gray-600">2 Beds | 2 Baths</span>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 hover:shadow-xl transition-all">
                <div class="h-48 bg-gradient-to-br from-green-200 to-teal-300"></div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Garden Apartment</h3>
                    <p class="text-gray-600 text-sm mb-3">Area 47, Lilongwe</p>
                    <div class="flex justify-between items-center">
                        <span class="text-purple-600 font-bold">$1,350/mo</span>
                        <span class="text-sm text-gray-600">2 Beds | 1 Bath</span>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 hover:shadow-xl transition-all">
                <div class="h-48 bg-gradient-to-br from-pink-200 to-rose-300"></div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Downtown Studio</h3>
                    <p class="text-gray-600 text-sm mb-3">City Center, Lilongwe</p>
                    <div class="flex justify-between items-center">
                        <span class="text-purple-600 font-bold">$950/mo</span>
                        <span class="text-sm text-gray-600">1 Bed | 1 Bath</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
