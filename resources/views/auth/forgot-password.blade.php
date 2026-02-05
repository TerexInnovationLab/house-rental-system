@extends('layouts.auth')

@section('title', 'ZikoSpace - Forgot Password')

@section('content')
<div class="min-h-screen flex items-center justify-center px-6 py-14">
    <div class="w-full max-w-md">
        <div class="glass border border-white/60 shadow-2xl rounded-3xl p-8 sm:p-10">
            <div class="text-center mb-8">
                <div class="w-16 h-16 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center mx-auto mb-4 text-xl font-semibold">
                    ?
                </div>
                <h1 class="text-3xl font-display font-semibold text-slate-900">Forgot your password?</h1>
                <p class="text-slate-600 mt-2">Enter your email and we will send a reset link.</p>
            </div>

            <form class="space-y-4">
                <div>
                    <label class="text-sm font-medium text-slate-700">Email address</label>
                    <input type="email" placeholder="you@email.com" class="mt-2 w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition">
                </div>
                <button type="submit" class="w-full bg-slate-900 text-white py-3.5 rounded-xl font-semibold hover:bg-slate-800 transition">
                    Send reset link
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-slate-600">
                Remembered your password?
                <a href="/signin" class="text-purple-700 font-semibold hover:text-purple-900">Back to sign in</a>
            </div>
        </div>

        <div class="mt-6 text-xs text-slate-500 text-center">
            Need help? Contact support and we will get you back in.
        </div>
    </div>
</div>
@endsection
