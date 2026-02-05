@extends('layouts.dashboard')

@section('title', 'Saved Properties - ZikoSpace')

@section('sidebar')
@include('app.partials.customer-sidebar')
@endsection

@section('dashboard')
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-3xl font-display font-bold text-gray-900 mb-2">Saved Properties</h1>
        <p class="text-gray-600">Your shortlisted homes and rentals.</p>
    </div>
    <a href="/browse" class="text-purple-600 font-medium hover:text-purple-700">Browse more</a>
</div>

<div class="grid md:grid-cols-3 gap-6">
    <div class="property-card bg-white rounded-xl overflow-hidden border border-gray-200">
        <div class="relative">
            <div class="h-48 bg-gradient-to-br from-purple-200 to-indigo-300"></div>
            <div class="absolute bottom-3 right-3 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-sm font-semibold">$1,200/mo</div>
        </div>
        <div class="p-4">
            <h3 class="font-semibold text-gray-900 mb-1">Modern Apartment</h3>
            <p class="text-sm text-gray-600 mb-3">Downtown, Lilongwe</p>
            <div class="flex items-center justify-between text-sm text-gray-700">
                <span>2 Beds / 2 Baths</span>
                <a href="/property-detail" class="text-purple-600 font-medium hover:text-purple-700">View -></a>
            </div>
        </div>
    </div>

    <div class="property-card bg-white rounded-xl overflow-hidden border border-gray-200">
        <div class="relative">
            <div class="h-48 bg-gradient-to-br from-green-200 to-teal-300"></div>
            <div class="absolute bottom-3 right-3 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-sm font-semibold">$1,350/mo</div>
        </div>
        <div class="p-4">
            <h3 class="font-semibold text-gray-900 mb-1">Garden Apartment</h3>
            <p class="text-sm text-gray-600 mb-3">Area 43, Lilongwe</p>
            <div class="flex items-center justify-between text-sm text-gray-700">
                <span>2 Beds / 1 Bath</span>
                <a href="/property-detail" class="text-purple-600 font-medium hover:text-purple-700">View -></a>
            </div>
        </div>
    </div>

    <div class="property-card bg-white rounded-xl overflow-hidden border border-gray-200">
        <div class="relative">
            <div class="h-48 bg-gradient-to-br from-blue-200 to-cyan-300"></div>
            <div class="absolute bottom-3 right-3 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-sm font-semibold">$950/mo</div>
        </div>
        <div class="p-4">
            <h3 class="font-semibold text-gray-900 mb-1">Downtown Studio</h3>
            <p class="text-sm text-gray-600 mb-3">City Center, Lilongwe</p>
            <div class="flex items-center justify-between text-sm text-gray-700">
                <span>1 Bed / 1 Bath</span>
                <a href="/property-detail" class="text-purple-600 font-medium hover:text-purple-700">View -></a>
            </div>
        </div>
    </div>
</div>
@endsection
