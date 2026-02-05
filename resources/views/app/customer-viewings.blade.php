@extends('layouts.dashboard')

@section('title', 'My Viewings - ZikoSpace')

@section('sidebar')
@include('app.partials.customer-sidebar')
@endsection

@section('dashboard')
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-3xl font-display font-bold text-gray-900 mb-2">My Viewings</h1>
        <p class="text-gray-600">Upcoming visits and scheduled appointments.</p>
    </div>
    <a href="/browse" class="text-purple-600 font-medium hover:text-purple-700">Book another</a>
</div>

<div class="space-y-4">
    <div class="flex items-center gap-4 p-4 bg-purple-50 rounded-xl border border-purple-100">
        <div class="w-20 h-20 bg-gradient-to-br from-purple-300 to-indigo-400 rounded-lg flex-shrink-0"></div>
        <div class="flex-1">
            <h3 class="font-semibold text-gray-900 mb-1">Modern Downtown Apartment</h3>
            <p class="text-sm text-gray-600 mb-2">Downtown, Lilongwe - $1,200/mo</p>
            <div class="text-sm text-gray-700">Today, 2:00 PM - John Doe</div>
        </div>
        <div class="flex flex-col gap-2">
            <a href="/property-detail" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition text-sm font-medium text-center">View Details</a>
            <a href="/booking-confirmation" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition text-sm font-medium text-center">Reschedule</a>
        </div>
    </div>

    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl">
        <div class="w-20 h-20 bg-gradient-to-br from-green-300 to-teal-400 rounded-lg flex-shrink-0"></div>
        <div class="flex-1">
            <h3 class="font-semibold text-gray-900 mb-1">Garden Apartment</h3>
            <p class="text-sm text-gray-600 mb-2">Area 43, Lilongwe - $1,350/mo</p>
            <div class="text-sm text-gray-700">Tomorrow, 10:00 AM - Sarah M.</div>
        </div>
        <div class="flex flex-col gap-2">
            <a href="/property-detail" class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition text-sm font-medium text-center">View Details</a>
            <a href="/booking-confirmation" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition text-sm font-medium text-center">Reschedule</a>
        </div>
    </div>
</div>
@endsection
