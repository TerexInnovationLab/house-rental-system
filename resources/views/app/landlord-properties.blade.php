@extends('layouts.dashboard')

@section('title', 'My Properties - ZikoSpace')

@section('sidebar')
@include('app.partials.landlord-sidebar')
@endsection

@section('dashboard')
<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
    <div>
        <h1 class="text-3xl font-display font-bold text-gray-900 mb-2">My Properties</h1>
        <p class="text-gray-600">All listings you’ve added to ZikoSpace.</p>
    </div>
    <a href="/add-property" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transition-all">
        Add Property
    </a>
</div>

<div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-lg transition">
        <div class="h-48 bg-gradient-to-br from-purple-200 to-indigo-300"></div>
        <div class="p-5">
            <div class="flex items-start justify-between mb-2">
                <h3 class="text-lg font-semibold text-gray-900">Modern Downtown Loft</h3>
                <span class="text-sm font-semibold text-purple-600">$1,850/mo</span>
            </div>
            <p class="text-sm text-gray-600 mb-3">Downtown, Lilongwe</p>
            <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                <span>2 Beds</span>
                <span>2 Baths</span>
                <span>Available</span>
            </div>
            <div class="flex items-center gap-2">
                <a href="/property-detail" class="flex-1 text-center py-2.5 rounded-lg border border-gray-200 text-gray-700 hover:border-purple-400 hover:text-purple-700 transition">View</a>
                <a href="/landlord/applications" class="flex-1 text-center py-2.5 rounded-lg bg-purple-600 text-white hover:bg-purple-700 transition">Applications</a>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-lg transition">
        <div class="h-48 bg-gradient-to-br from-green-200 to-teal-300"></div>
        <div class="p-5">
            <div class="flex items-start justify-between mb-2">
                <h3 class="text-lg font-semibold text-gray-900">Cozy Studio Near Park</h3>
                <span class="text-sm font-semibold text-purple-600">$900/mo</span>
            </div>
            <p class="text-sm text-gray-600 mb-3">Riverside, Lilongwe</p>
            <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                <span>1 Bed</span>
                <span>1 Bath</span>
                <span>Available</span>
            </div>
            <div class="flex items-center gap-2">
                <a href="/property-detail" class="flex-1 text-center py-2.5 rounded-lg border border-gray-200 text-gray-700 hover:border-purple-400 hover:text-purple-700 transition">View</a>
                <a href="/landlord/applications" class="flex-1 text-center py-2.5 rounded-lg bg-purple-600 text-white hover:bg-purple-700 transition">Applications</a>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-lg transition">
        <div class="h-48 bg-gradient-to-br from-amber-200 to-orange-300"></div>
        <div class="p-5">
            <div class="flex items-start justify-between mb-2">
                <h3 class="text-lg font-semibold text-gray-900">Family Home with Garden</h3>
                <span class="text-sm font-semibold text-purple-600">$1,600/mo</span>
            </div>
            <p class="text-sm text-gray-600 mb-3">Hillview, Lilongwe</p>
            <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                <span>3 Beds</span>
                <span>2 Baths</span>
                <span>Occupied</span>
            </div>
            <div class="flex items-center gap-2">
                <a href="/property-detail" class="flex-1 text-center py-2.5 rounded-lg border border-gray-200 text-gray-700 hover:border-purple-400 hover:text-purple-700 transition">View</a>
                <a href="/landlord/applications" class="flex-1 text-center py-2.5 rounded-lg bg-purple-600 text-white hover:bg-purple-700 transition">Applications</a>
            </div>
        </div>
    </div>
</div>
@endsection
