@extends('layouts.dashboard')

@section('title', 'Viewings - ZikoSpace')

@section('sidebar')
@include('app.partials.landlord-sidebar')
@endsection

@section('dashboard')
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-3xl font-display font-bold text-gray-900 mb-2">Viewings</h1>
        <p class="text-gray-600">Upcoming appointments for your properties.</p>
    </div>
    <a href="/add-property" class="text-purple-600 font-medium hover:text-purple-700">Add property</a>
</div>

<div class="space-y-4">
    <div class="flex items-center gap-4 p-4 bg-purple-50 rounded-xl border border-purple-100">
        <div class="w-16 h-16 bg-gradient-to-br from-purple-300 to-indigo-400 rounded-lg flex-shrink-0"></div>
        <div class="flex-1">
            <h3 class="font-semibold text-gray-900 mb-1">Modern Downtown Apartment</h3>
            <p class="text-sm text-gray-600 mb-2">Downtown, Lilongwe</p>
            <div class="text-sm text-gray-700">Today, 2:00 PM - Sarah Johnson</div>
        </div>
        <div class="flex gap-2">
            <button class="p-2 bg-green-100 text-green-600 rounded-lg hover:bg-green-200 transition">Approve</button>
            <button class="p-2 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition">Decline</button>
        </div>
    </div>

    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-green-300 to-teal-400 rounded-lg flex-shrink-0"></div>
        <div class="flex-1">
            <h3 class="font-semibold text-gray-900 mb-1">Spacious Family House</h3>
            <p class="text-sm text-gray-600 mb-2">Area 47, Lilongwe</p>
            <div class="text-sm text-gray-700">Tomorrow, 10:00 AM - Michael Brown</div>
        </div>
        <div class="flex gap-2">
            <button class="p-2 bg-green-100 text-green-600 rounded-lg hover:bg-green-200 transition">Approve</button>
            <button class="p-2 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition">Decline</button>
        </div>
    </div>
</div>
@endsection
