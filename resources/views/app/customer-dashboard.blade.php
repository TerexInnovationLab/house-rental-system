@extends('layouts.dashboard')

@section('title', 'Customer Dashboard - ZikoSpace')

@section('styles')
<style>
    .sidebar-link {
        transition: all 0.3s;
    }
    .sidebar-link:hover {
        background: rgba(102, 126, 234, 0.1);
        padding-left: 1.5rem;
    }
    .sidebar-link.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    .property-card {
        transition: all 0.3s;
    }
    .property-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.1);
    }
</style>
@endsection

@section('sidebar')
@include('app.partials.customer-sidebar')
@endsection

@section('dashboard')
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-3xl font-display font-bold text-gray-900 mb-2">Welcome back, Sarah!</h1>
        <p class="text-gray-600">Here is your property search activity.</p>
    </div>
</div>

<div class="grid md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">8</div>
        <div class="text-gray-600 text-sm">Saved Properties</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">2</div>
        <div class="text-gray-600 text-sm">Upcoming Viewings</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">3</div>
        <div class="text-gray-600 text-sm">Active Applications</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">4</div>
        <div class="text-gray-600 text-sm">New Messages</div>
    </div>
</div>

<div class="grid lg:grid-cols-3 gap-8 mb-8">
    <div class="lg:col-span-2 bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-display font-bold text-gray-900">Upcoming Viewings</h2>
            <a href="/booking-confirmation" class="text-purple-600 font-medium hover:text-purple-700">View All</a>
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
    </div>

    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <h2 class="text-xl font-display font-bold text-gray-900 mb-6">Application Status</h2>
        <div class="space-y-4">
            <div class="p-4 bg-green-50 rounded-xl border border-green-200">
                <div class="flex items-start justify-between mb-2">
                    <h3 class="font-semibold text-gray-900 text-sm">Downtown Studio</h3>
                    <span class="px-2 py-1 bg-green-500 text-white rounded-full text-xs font-medium">Approved</span>
                </div>
                <p class="text-xs text-gray-600 mb-2">City Center, Lilongwe</p>
                <p class="text-xs text-gray-700">Next: Sign lease agreement</p>
            </div>
            <div class="p-4 bg-yellow-50 rounded-xl border border-yellow-200">
                <div class="flex items-start justify-between mb-2">
                    <h3 class="font-semibold text-gray-900 text-sm">Modern Apartment</h3>
                    <span class="px-2 py-1 bg-yellow-500 text-white rounded-full text-xs font-medium">Pending</span>
                </div>
                <p class="text-xs text-gray-600 mb-2">Downtown, Lilongwe</p>
                <p class="text-xs text-gray-700">Under review by landlord</p>
            </div>
        </div>
        <a href="/browse" class="w-full mt-6 inline-block text-center py-3 bg-purple-600 text-white rounded-xl font-semibold hover:bg-purple-700 transition">Submit New Application</a>
    </div>
</div>

<div id="saved-properties" class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 mb-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-display font-bold text-gray-900">Saved Properties</h2>
        <a href="/customer/saved" class="text-purple-600 font-medium hover:text-purple-700">View All (8)</a>
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
</div>

<div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-display font-bold text-gray-900">Recent Messages</h2>
        <a href="/messages" class="text-purple-600 font-medium hover:text-purple-700">View All</a>
    </div>

    <div class="space-y-4">
        <div class="flex items-start gap-4 p-4 bg-purple-50 rounded-xl">
            <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold">JD</div>
            <div class="flex-1 min-w-0">
                <div class="flex justify-between items-start mb-1">
                    <h3 class="font-semibold text-gray-900">John Doe</h3>
                    <span class="text-xs text-gray-600">2h ago</span>
                </div>
                <p class="text-sm text-gray-600 mb-1">Re: Modern Downtown Apartment</p>
                <p class="text-sm text-gray-700 truncate">Hi Sarah, I confirmed your viewing for today at 2 PM.</p>
            </div>
        </div>
        <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl">
            <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold">SM</div>
            <div class="flex-1 min-w-0">
                <div class="flex justify-between items-start mb-1">
                    <h3 class="font-semibold text-gray-900">Sarah M.</h3>
                    <span class="text-xs text-gray-600">5h ago</span>
                </div>
                <p class="text-sm text-gray-600 mb-1">Re: Garden Apartment</p>
                <p class="text-sm text-gray-700 truncate">Thank you for your interest! I will send the lease shortly.</p>
            </div>
        </div>
    </div>
</div>
@endsection
