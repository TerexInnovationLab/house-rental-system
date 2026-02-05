@extends('layouts.marketing')

@section('title', 'About PropertyHub')

@section('content')
<section class="hero-gradient py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <p class="uppercase tracking-[0.4em] text-xs text-indigo-200 mb-4">About PropertyHub</p>
        <h1 class="text-4xl md:text-5xl font-display font-bold mb-6">Built to make renting simple</h1>
        <p class="text-lg text-purple-100 max-w-3xl mx-auto">
            PropertyHub connects tenants and landlords with transparent listings, verified profiles, and clear next steps.
        </p>
    </div>
</section>

<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
            <h3 class="text-xl font-display font-semibold text-gray-900 mb-3">Verified Listings</h3>
            <p class="text-gray-600">We highlight high-quality listings and help tenants make confident decisions.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
            <h3 class="text-xl font-display font-semibold text-gray-900 mb-3">Clear Applications</h3>
            <p class="text-gray-600">Submit applications, track status, and keep everything organized in one place.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
            <h3 class="text-xl font-display font-semibold text-gray-900 mb-3">Better Communication</h3>
            <p class="text-gray-600">Built-in messaging keeps landlords and tenants aligned without extra apps.</p>
        </div>
    </div>
</section>

<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-3xl font-display font-bold text-gray-900 mb-4">How it works</h2>
            <ol class="space-y-3 text-gray-600">
                <li>1. Browse listings by location, price, and amenities.</li>
                <li>2. Save your favorites and schedule a viewing.</li>
                <li>3. Apply and track your application status.</li>
                <li>4. Sign a lease and move in.</li>
            </ol>
        </div>
        <div class="bg-gradient-to-br from-purple-100 to-indigo-100 rounded-3xl p-8">
            <h3 class="text-xl font-display font-semibold text-gray-900 mb-3">Ready to explore?</h3>
            <p class="text-gray-600 mb-6">Start browsing available properties right away.</p>
            <a href="/browse" class="inline-block bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transition-all">
                Browse Properties
            </a>
        </div>
    </div>
</section>
@endsection
