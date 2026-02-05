@extends('layouts.app')

@section('title', 'Access Denied - ZikoSpace')

@section('content')
<section class="min-h-[70vh] flex items-center justify-center px-6 py-16">
    <div class="max-w-2xl text-center">
        <div class="text-sm uppercase tracking-[0.3em] text-gray-400 mb-3">Access Denied</div>
        <h1 class="text-4xl sm:text-5xl font-display font-bold text-gray-900 mb-4">You don't have access to this page</h1>
        <p class="text-gray-600 text-lg mb-8">
            This section is restricted to a different role. If you believe this is a mistake, please contact support.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/dashboard" class="px-6 py-3 rounded-xl bg-slate-900 text-white font-semibold hover:bg-slate-800 transition">
                Go to Dashboard
            </a>
            <a href="/browse" class="px-6 py-3 rounded-xl border border-gray-200 text-gray-700 font-semibold hover:border-purple-400 hover:text-purple-700 transition">
                Browse Properties
            </a>
        </div>
    </div>
</section>
@endsection
