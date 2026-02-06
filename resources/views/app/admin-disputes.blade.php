@extends('layouts.dashboard')

@section('title', 'Disputes Management - ZikoSpace')

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
        <h1 class="text-3xl font-display font-bold text-gray-900 mb-2">Disputes Management</h1>
        <p class="text-gray-600">Manage and resolve disputes between users.</p>
    </div>
</div>

<!-- Disputes Stats -->
<div class="grid md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">3</div>
        <div class="text-gray-600 text-sm">Total Disputes</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">2</div>
        <div class="text-gray-600 text-sm">Open</div>
        <div class="mt-3 text-xs text-gray-500">Awaiting resolution</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">1</div>
        <div class="text-gray-600 text-sm">Resolved</div>
        <div class="mt-3 text-xs text-gray-500">This month</div>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
        <div class="text-3xl font-bold text-gray-900 mb-1">3 days</div>
        <div class="text-gray-600 text-sm">Avg. Resolution Time</div>
    </div>
</div>

<!-- Disputes Table -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 border-b border-gray-100">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-display font-bold text-gray-900">All Disputes</h2>
            <div class="flex gap-3">
                <input type="text" placeholder="Search disputes..." class="px-4 py-2 border border-gray-200 rounded-lg text-sm w-64">
                <select class="px-4 py-2 border border-gray-200 rounded-lg text-sm">
                    <option value="">All Status</option>
                    <option value="open">Open</option>
                    <option value="in_progress">In Progress</option>
                    <option value="resolved">Resolved</option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Dispute ID</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Party 1</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Party 2</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date Filed</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">
                        <span class="font-medium text-gray-900">#DIS001</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">Payment not received for property rent</td>
                    <td class="px-6 py-4 text-sm text-gray-600">John Doe</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Jane Smith</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 text-xs font-semibold rounded-full">In Progress</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">Jan 15, 2025</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">View</button>
                            <button class="text-purple-600 hover:text-purple-800 text-sm font-medium">Resolve</button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">
                        <span class="font-medium text-gray-900">#DIS002</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">Property damage claim</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Mike Wilson</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Sarah Brown</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-red-100 text-red-700 text-xs font-semibold rounded-full">Open</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">Jan 20, 2025</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">View</button>
                            <button class="text-purple-600 hover:text-purple-800 text-sm font-medium">Resolve</button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">
                        <span class="font-medium text-gray-900">#DIS003</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">Lease agreement dispute</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Tom Anderson</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Lisa Green</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Resolved</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">Jan 10, 2025</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">View</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
