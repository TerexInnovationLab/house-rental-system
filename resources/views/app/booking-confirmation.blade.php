@extends('layouts.dashboard')

@section('title', 'Booking Confirmation - PropertyHub')

@section('dashboard')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="text-center mb-8">
        <div class="w-20 h-20 rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 text-white flex items-center justify-center mx-auto text-4xl font-bold shadow-lg">
            ?
        </div>
        <h1 class="text-4xl font-display font-bold text-gray-900 mt-6">Booking confirmed</h1>
        <p class="text-lg text-gray-600 mt-2">Your viewing has been scheduled.</p>
    </div>

    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden mb-8">
        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 p-8 text-white">
            <div class="flex items-center gap-4">
                <div class="w-20 h-20 rounded-xl bg-white/20 flex items-center justify-center text-xl font-semibold">PH</div>
                <div>
                    <h2 class="text-2xl font-bold mb-1">Modern Downtown Loft</h2>
                    <p class="text-purple-100">123 Main Street, Lilongwe</p>
                </div>
            </div>
        </div>

        <div class="p-8 space-y-6">
            <div class="bg-purple-50 rounded-xl p-6 border border-purple-200 text-center">
                <p class="text-sm text-gray-600">Confirmation Number</p>
                <p class="text-3xl font-bold text-purple-600">#PH-2026-0147</p>
            </div>

            <div class="grid sm:grid-cols-2 gap-6">
                <div class="p-5 border border-gray-200 rounded-xl">
                    <p class="text-sm text-gray-500">Viewing Date</p>
                    <p class="text-lg font-semibold text-gray-900">Saturday, March 21, 2026</p>
                </div>
                <div class="p-5 border border-gray-200 rounded-xl">
                    <p class="text-sm text-gray-500">Viewing Time</p>
                    <p class="text-lg font-semibold text-gray-900">2:00 PM - 3:00 PM</p>
                </div>
            </div>

            <div class="border-t border-gray-200 pt-6">
                <h3 class="font-semibold text-gray-900 mb-3">Landlord Contact</h3>
                <div class="flex items-center justify-between flex-wrap gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-emerald-500 text-white flex items-center justify-center text-sm font-semibold">SJ</div>
                        <div>
                            <p class="font-semibold text-gray-900">Sarah Johnson</p>
                            <p class="text-sm text-gray-600">Property Owner</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="/messages" class="px-5 py-2.5 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-lg font-semibold hover:shadow-lg transition">Message</a>
                        <button class="px-5 py-2.5 border border-purple-600 text-purple-700 rounded-lg font-semibold hover:bg-purple-50 transition">Call</button>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 pt-6">
                <h3 class="font-semibold text-gray-900 mb-3">Important Notes</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>Arrive 5 minutes early for check-in.</li>
                    <li>Bring a valid photo ID.</li>
                    <li>Feel free to take photos during the viewing.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
        <button class="px-6 py-3 border border-gray-200 rounded-lg font-semibold text-gray-700 hover:border-purple-600 hover:text-purple-700 transition">Add to Calendar</button>
        <button class="px-6 py-3 border border-gray-200 rounded-lg font-semibold text-gray-700 hover:border-purple-600 hover:text-purple-700 transition">Share Details</button>
        <button class="px-6 py-3 border border-gray-200 rounded-lg font-semibold text-gray-700 hover:border-purple-600 hover:text-purple-700 transition">Print</button>
    </div>

    <div class="text-center">
        <a href="/customer-dashboard" class="text-purple-700 font-semibold hover:text-purple-900">Back to Dashboard</a>
    </div>
</div>
@endsection

