@extends('layouts.dashboard')

@section('title', 'Rental Application - PropertyHub')

@section('sidebar')
@include('app.partials.customer-sidebar')
@endsection

@section('dashboard')
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
    <div>
        <h1 class="text-3xl font-display font-bold text-gray-900 mb-2">Rental Application</h1>
        <p class="text-gray-600">Complete the form below to apply for this property.</p>
    </div>
    <div class="flex items-center gap-3">
        <a href="/browse" class="text-gray-700 hover:text-purple-600 font-medium">Back to Browse</a>
        <a href="/property-detail" class="text-purple-600 font-medium hover:text-purple-700">View Listing</a>
    </div>
</div>

<div class="grid lg:grid-cols-3 gap-8">
    <div class="lg:col-span-2 bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
        <form class="space-y-6">
            <div class="grid sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">First Name</label>
                    <input type="text" placeholder="Alex" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Last Name</label>
                    <input type="text" placeholder="Johnson" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Email</label>
                    <input type="email" placeholder="you@email.com" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Phone</label>
                    <input type="tel" placeholder="+265 999 000 000" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-900 mb-2">Current Address</label>
                <input type="text" placeholder="Street address, city" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            </div>

            <div class="grid sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Employment Status</label>
                    <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option>Employed</option>
                        <option>Self-employed</option>
                        <option>Student</option>
                        <option>Unemployed</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Monthly Income</label>
                    <input type="number" placeholder="1200" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Move-in Date</label>
                    <input type="date" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Lease Term</label>
                    <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option>6 months</option>
                        <option selected>12 months</option>
                        <option>18 months</option>
                        <option>24 months</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-900 mb-2">Additional Notes</label>
                <textarea rows="4" placeholder="Add any details you'd like the landlord to know." class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
            </div>

            <div class="flex items-start gap-3 text-sm text-gray-600">
                <input type="checkbox" class="mt-1 h-4 w-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500">
                <p>I confirm the information provided is accurate.</p>
            </div>

            <div class="flex items-center gap-4 pt-2">
                <button type="button" class="px-6 py-3 border border-gray-200 rounded-xl text-gray-700 hover:bg-gray-50 transition">
                    Save Draft
                </button>
                <button type="submit" class="flex-1 px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-xl font-semibold hover:shadow-lg transition">
                    Submit Application
                </button>
            </div>
        </form>
    </div>

    <div class="space-y-6">
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Property Summary</h2>
            <div class="h-40 bg-gradient-to-br from-purple-200 to-indigo-300 rounded-xl mb-4"></div>
            <h3 class="font-semibold text-gray-900">Modern Downtown Apartment</h3>
            <p class="text-sm text-gray-600">Downtown, Lilongwe</p>
            <div class="flex items-center justify-between mt-4 text-sm text-gray-700">
                <span>2 Beds</span>
                <span>2 Baths</span>
                <span>$1,200/mo</span>
            </div>
        </div>

        <div class="bg-purple-50 rounded-2xl p-6 border border-purple-100">
            <h3 class="font-semibold text-gray-900 mb-3">What happens next?</h3>
            <ol class="space-y-2 text-sm text-gray-700">
                <li>1. Landlord receives your application.</li>
                <li>2. You’ll see status updates in your dashboard.</li>
                <li>3. If approved, you’ll be prompted to sign the lease.</li>
            </ol>
        </div>
    </div>
</div>
@endsection
