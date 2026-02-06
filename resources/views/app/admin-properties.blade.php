@extends('layouts.dashboard')

@section('title', 'Properties Management - ZikoSpace')

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
        <h1 class="text-3xl font-display font-bold text-gray-900 mb-2">Properties Management</h1>
        <p class="text-gray-600">Manage all properties on the platform.</p>
    </div>
    <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
        Add Property
    </button>
</div>

<!-- Properties Stats -->
<div class="grid md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['total_properties'] ?? 0 }}</div>
        <div class="text-gray-600 text-sm">Total Properties</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['available_properties'] ?? 0 }}</div>
        <div class="text-gray-600 text-sm">Available</div>
        <div class="mt-3 text-xs text-gray-500">Ready to rent</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['occupied_properties'] ?? 0 }}</div>
        <div class="text-gray-600 text-sm">Occupied</div>
        <div class="mt-3 text-xs text-gray-500">Currently rented</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">{{ count($pending_properties ?? []) }}</div>
        <div class="text-gray-600 text-sm">Pending Approval</div>
        <div class="mt-3 text-xs text-gray-500">Awaiting review</div>
    </div>
</div>

<!-- Properties Table -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 border-b border-gray-100">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-display font-bold text-gray-900">All Properties</h2>
            <div class="flex gap-3">
                <input type="text" placeholder="Search properties..." class="px-4 py-2 border border-gray-200 rounded-lg text-sm w-64">
                <select class="px-4 py-2 border border-gray-200 rounded-lg text-sm">
                    <option value="">All Status</option>
                    <option value="available">Available</option>
                    <option value="occupied">Occupied</option>
                    <option value="pending">Pending</option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Property Name</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Location</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Owner</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($recent_properties ?? [] as $property)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">
                        <span class="font-medium text-gray-900">{{ $property->name ?? 'N/A' }}</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $property->location ?? 'N/A' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $property->user->name ?? 'N/A' }}</td>
                    <td class="px-6 py-4 text-sm font-semibold text-gray-900">MWK {{ number_format($property->price ?? 0, 2) }}</td>
                    <td class="px-6 py-4">
                        @php
                            $statusColors = [
                                'available' => 'bg-green-100 text-green-700',
                                'occupied' => 'bg-blue-100 text-blue-700',
                                'pending' => 'bg-yellow-100 text-yellow-700',
                            ];
                            $statusClass = $statusColors[$property->status] ?? 'bg-gray-100 text-gray-700';
                        @endphp
                        <span class="px-3 py-1 {{ $statusClass }} text-xs font-semibold rounded-full">
                            {{ ucfirst($property->status ?? 'unknown') }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">View</button>
                            <button class="text-gray-600 hover:text-gray-800 text-sm font-medium">Edit</button>
                            <button class="text-red-600 hover:text-red-800 text-sm font-medium">Delete</button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-8 text-center text-gray-500">
                        No properties found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
