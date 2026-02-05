@extends('layouts.dashboard')

@section('title', 'Landlord Dashboard - PropertyHub')

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
    .stat-card {
        transition: all 0.3s;
    }
    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.1);
    }
</style>
@endsection

@section('sidebar')
<aside class="dashboard-sidebar w-64 bg-white shadow-lg fixed top-16 h-[calc(100vh-4rem)] transition-transform duration-300 z-50">
    <div class="p-6 border-b border-gray-200">
        <h1 class="text-2xl font-display font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">PropertyHub</h1>
        <p class="text-sm text-gray-600 mt-1">Landlord Portal</p>
    </div>

    <nav class="p-4">
        <a href="/landlord-dashboard" class="sidebar-link js-nav-link active flex items-center gap-3 px-4 py-3 rounded-lg mb-2">
            <span class="font-medium">Dashboard</span>
        </a>
        <a href="/search-results" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700">
            <span class="font-medium">My Properties</span>
        </a>
        <a href="/booking-confirmation" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700">
            <span class="font-medium">Viewings</span>
            <span class="ml-auto bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded-full">3</span>
        </a>
        <a href="#applications" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700">
            <span class="font-medium">Applications</span>
            <span class="ml-auto bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full">5</span>
        </a>
        <a href="/messages" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700">
            <span class="font-medium">Messages</span>
            <span class="ml-auto bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full">12</span>
        </a>
        <div class="border-t border-gray-200 mt-6 pt-6">
            <a href="/profile" class="sidebar-link js-nav-link flex items-center gap-3 px-4 py-3 rounded-lg mb-2 text-gray-700">
                <span class="font-medium">Settings</span>
            </a>
        </div>
    </nav>
</aside>
@endsection

@section('dashboard')
<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
    <div>
        <h1 class="text-3xl font-display font-bold text-gray-900 mb-2">Welcome back, John!</h1>
        <p class="text-gray-600">Here is what is happening with your properties today.</p>
    </div>
    <div class="flex items-center gap-4">
        <a href="/add-property" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transition-all">
            Add Property
        </a>
    </div>
</div>

<div class="grid md:grid-cols-4 gap-6 mb-8">
    <div class="stat-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">24</div>
        <div class="text-gray-600 text-sm">Total Properties</div>
    </div>
    <div class="stat-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">21</div>
        <div class="text-gray-600 text-sm">Occupied</div>
    </div>
    <div class="stat-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">3</div>
        <div class="text-gray-600 text-sm">Vacant</div>
    </div>
    <div class="stat-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">$28.4K</div>
        <div class="text-gray-600 text-sm">Monthly Income</div>
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
    </div>

    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <h2 class="text-xl font-display font-bold text-gray-900 mb-6">Quick Actions</h2>
        <div class="space-y-3">
            <a href="/add-property" class="w-full flex items-center gap-3 p-4 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-xl hover:shadow-lg transition-all">
                <span class="font-semibold">Add New Property</span>
            </a>
            <a href="#applications" class="w-full flex items-center gap-3 p-4 bg-purple-50 text-purple-600 rounded-xl hover:bg-purple-100 transition-all">
                <span class="font-semibold">Review Applications</span>
            </a>
            <a href="/messages" class="w-full flex items-center gap-3 p-4 bg-purple-50 text-purple-600 rounded-xl hover:bg-purple-100 transition-all">
                <span class="font-semibold">Check Messages</span>
            </a>
        </div>
    </div>
</div>

<div id="applications" class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-display font-bold text-gray-900">Recent Applications</h2>
        <a href="#applications" class="text-purple-600 font-medium hover:text-purple-700">View All</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-gray-200">
                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Applicant</th>
                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Property</th>
                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Date</th>
                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Status</th>
                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <td class="py-4 px-4">
                        <div class="font-medium text-gray-900">Emma Johnson</div>
                        <div class="text-sm text-gray-600">emma.j@email.com</div>
                    </td>
                    <td class="py-4 px-4">
                        <div class="font-medium text-gray-900">Modern Downtown Apt</div>
                        <div class="text-sm text-gray-600">Downtown, Lilongwe</div>
                    </td>
                    <td class="py-4 px-4 text-gray-700">Feb 3, 2026</td>
                    <td class="py-4 px-4">
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm font-medium">Pending</span>
                    </td>
                    <td class="py-4 px-4">
                        <a href="/messages" class="text-purple-600 font-medium hover:text-purple-700">Review</a>
                    </td>
                </tr>
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <td class="py-4 px-4">
                        <div class="font-medium text-gray-900">Robert Miller</div>
                        <div class="text-sm text-gray-600">r.miller@email.com</div>
                    </td>
                    <td class="py-4 px-4">
                        <div class="font-medium text-gray-900">Garden Apartment</div>
                        <div class="text-sm text-gray-600">Area 43, Lilongwe</div>
                    </td>
                    <td class="py-4 px-4 text-gray-700">Feb 2, 2026</td>
                    <td class="py-4 px-4">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">Approved</span>
                    </td>
                    <td class="py-4 px-4">
                        <a href="/messages" class="text-purple-600 font-medium hover:text-purple-700">View</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
