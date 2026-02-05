@extends('layouts.dashboard')

@section('title', 'Applications - ZikoSpace')

@section('sidebar')
@include('app.partials.landlord-sidebar')
@endsection

@section('dashboard')
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-3xl font-display font-bold text-gray-900 mb-2">Applications</h1>
        <p class="text-gray-600">Review and manage rental applications.</p>
    </div>
    <a href="/messages" class="text-purple-600 font-medium hover:text-purple-700">Messages</a>
</div>

<div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
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
