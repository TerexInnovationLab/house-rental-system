@extends('layouts.dashboard')

@section('title', 'Admin Dashboard - ZikoSpace')

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
</style>
@endsection

@section('sidebar')
@include('app.partials.admin-sidebar')
@endsection

@section('dashboard')
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-3xl font-display font-bold text-gray-900 mb-2">Platform Overview</h1>
        <p class="text-gray-600">System health and key metrics at a glance.</p>
    </div>
</div>

<div id="users" class="grid md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['total_users'] ?? 0 }}</div>
        <div class="text-gray-600 text-sm">Total Users</div>
        <div class="mt-3 text-xs text-gray-500">{{ $stats['total_landlords'] }} Landlords - {{ $stats['total_customers'] }} Tenants</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['available_properties'] ?? 0 }}</div>
        <div class="text-gray-600 text-sm">Active Listings</div>
        <div class="mt-3 text-xs text-gray-500">{{ $stats['pending_applications'] ?? 0}} pending approval</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['applications'] ?? 0 }}</div>
        <div class="text-gray-600 text-sm">Applications (This Month)</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">MWK {{ number_format($stats['total_revenue'] ?? 0, 2) }}</div>
        <div class="text-gray-600 text-sm">Revenue (MTD)</div>
    </div>
</div>

<div class="grid lg:grid-cols-2 gap-8 mb-8">
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-display font-bold text-gray-900">Platform Activity</h2>
            <select class="px-3 py-2 border border-gray-200 rounded-lg text-sm">
                <option>Last 7 days</option>
                <option>Last 30 days</option>
                <option>Last 90 days</option>
            </select>
        </div>
        <div class="h-64 bg-gradient-to-br from-purple-50 to-indigo-50 rounded-xl flex items-center justify-center">
            <span class="text-gray-600 font-medium">Activity Chart Visualization</span>
        </div>
    </div>

    <div id="properties" class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <h2 class="text-xl font-display font-bold text-gray-900 mb-6">Top Locations</h2>
        <div class="space-y-4">
            <div>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm font-medium text-gray-900">Downtown Lilongwe</span>
                    <span class="text-sm text-gray-600">1,234 listings</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-purple-600 h-2 rounded-full" style="width: 85%"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm font-medium text-gray-900">Area 47</span>
                    <span class="text-sm text-gray-600">892 listings</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-indigo-600 h-2 rounded-full" style="width: 65%"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm font-medium text-gray-900">City Center</span>
                    <span class="text-sm text-gray-600">543 listings</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 40%"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grid lg:grid-cols-3 gap-8 mb-8" id="disputes">
    <div class="lg:col-span-2 bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-display font-bold text-gray-900">Pending Property Approvals</h2>
            <span class="text-yellow-600 bg-yellow-100 px-3 py-1 rounded-full text-sm font-medium">12 pending</span>
        </div>

        <div class="space-y-4">
            @forelse($pending_properties as $property)
            <div class="flex items-center gap-4 p-4 bg-yellow-50 rounded-xl border border-yellow-200">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-300 to-indigo-400 rounded-lg flex-shrink-0"></div>
                <div class="flex-1">
                    <h3 class="font-semibold text-gray-900 mb-1">{{ $property->title }}</h3>
                    <p class="text-sm text-gray-600 mb-1">{{ $property->location }}</p>
                    <div class="text-xs text-gray-600">MWK {{ number_format($property->rent, 2) }}</div>
                </div>
                <div class="flex gap-2">
                    <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition text-sm font-medium">Approve</button>
                    <button class="px-4 py-2 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition text-sm font-medium">Reject</button>
                </div>
            </div>
              @empty
                <div>
                    <span class="text-sm font-medium text-gray-900">
                        No records found
                    </span>
                </div>
            @endforelse

        </div>
    </div>

    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <h2 class="text-xl font-display font-bold text-gray-900 mb-6">Alerts and Issues</h2>
        <div class="space-y-4">
            <div class="p-4 bg-red-50 rounded-xl border border-red-200">
                <h4 class="font-semibold text-gray-900 text-sm mb-1">Reported Listing</h4>
                <p class="text-xs text-gray-700 mb-2">Fraudulent listing reported by 3 users.</p>
                <a href="#disputes" class="text-xs text-red-600 font-medium">Review Now</a>
            </div>
            <div class="p-4 bg-yellow-50 rounded-xl border border-yellow-200">
                <h4 class="font-semibold text-gray-900 text-sm mb-1">Dispute Active</h4>
                <p class="text-xs text-gray-700 mb-2">Tenant vs Landlord payment dispute.</p>
                <a href="#disputes" class="text-xs text-yellow-600 font-medium">View Details</a>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-display font-bold text-gray-900">Recent User Registrations</h2>
        <a href="#users" class="text-purple-600 font-medium hover:text-purple-700">View All Users</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-gray-200">
                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">User</th>
                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Type</th>
                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Registration Date</th>
                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recent_users as $user)
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4">
                            <div class="font-medium text-gray-900">{{ $user->full_name }}</div>
                            <div class="text-sm text-gray-600">{{ $user->email }}</div>
                        </td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm font-medium">{{ $user->role->name }}</span>
                        </td>
                        <td class="py-4 px-4 text-gray-700">{{ $user->created_at }}</td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">{{ $user->status }}</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
