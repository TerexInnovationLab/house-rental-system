@extends('layouts.auth')

@section('title', 'ZikoSpace - Sign In')

@section('content')
<div class="min-h-screen grid lg:grid-cols-2">
    <section class="relative hidden lg:flex">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-indigo-900 to-purple-900"></div>
        <div class="relative z-10 p-12 flex flex-col justify-between text-white">
            <div>
                <h1 class="text-3xl font-display font-bold tracking-wide">ZikoSpace</h1>
            </div>
            <div>
                <p class="uppercase tracking-[0.4em] text-xs text-indigo-200 mb-4">Welcome Back</p>
                <h2 class="text-5xl font-display font-semibold leading-tight">
                    Pick up where
                    your search left off.
                </h2>
                <p class="text-indigo-100/90 mt-6 text-lg max-w-md">
                    Saved homes, pending applications, and landlord messages are waiting for you.
                </p>
            </div>
            <div class="flex items-center gap-4 text-sm text-indigo-200">
                <span>Secure login</span>
                <span>�</span>
                <span>Fast access</span>
                <span>�</span>
                <span>Trusted listings</span>
            </div>
        </div>
    </section>

    <section class="flex items-center justify-center px-6 py-14 lg:py-20">
        <div class="w-full max-w-md">
            <div class="glass border border-white/60 shadow-2xl rounded-3xl p-8 sm:p-10">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <p class="text-xs uppercase tracking-[0.3em] text-purple-700 mb-2">Sign in</p>
                        <h3 class="text-3xl font-display font-semibold text-slate-900">Welcome back</h3>
                    </div>
                    <a href="/" class="text-sm font-semibold text-purple-700 hover:text-purple-900">Back home</a>
                </div>

                @if ($errors->any())
                    <div class="rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="space-y-4" method="POST" action="{{ route('auth.login') }}">
                    @csrf
                    <div class="space-y-3">
                        <button type="button" class="w-full flex items-center justify-center gap-3 px-6 py-3 border border-slate-200 rounded-xl hover:border-purple-400 hover:bg-purple-50 transition">
                            <span class="w-5 h-5 rounded-full bg-white flex items-center justify-center text-xs font-bold text-red-500 border border-slate-200">G</span>
                            <span class="font-medium text-slate-700">Continue with Google</span>
                        </button>
                        <button type="button" class="w-full flex items-center justify-center gap-3 px-6 py-3 border border-slate-200 rounded-xl hover:border-purple-400 hover:bg-purple-50 transition">
                            <span class="w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-bold">f</span>
                            <span class="font-medium text-slate-700">Continue with Facebook</span>
                        </button>
                    </div>

                    <div class="relative py-2">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-slate-200"></div>
                        </div>
                        <div class="relative flex justify-center text-xs uppercase tracking-[0.3em] text-slate-400">
                            <span class="bg-white px-3">Or</span>
                        </div>
                    </div>

                    <div>
                        <label class="text-sm font-medium text-slate-700">Email address</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="you@email.com" class="mt-2 w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition" required>
                    </div>
                    <div>
                        <label class="text-sm font-medium text-slate-700">Password</label>
                        <input type="password" name="password" placeholder="Enter your password" class="mt-2 w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition" required>
                    </div>

                    <div class="flex items-center justify-between text-sm text-slate-600">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-300 text-purple-600 focus:ring-purple-500">
                            Remember me
                        </label>
                        <a href="/forgot-password" class="text-purple-700 font-semibold hover:text-purple-900">Forgot password?</a>
                    </div>

                    <button type="submit" class="w-full mt-2 bg-slate-900 text-white py-3.5 rounded-xl font-semibold hover:bg-slate-800 transition">
                        Sign in
                    </button>
                </form>

                <div class="mt-6 text-center text-sm text-slate-600">
                    New to ZikoSpace?
                    <a href="/signup" class="text-purple-700 font-semibold hover:text-purple-900">Create an account</a>
                </div>
            </div>

            <div class="mt-6 text-xs text-slate-500 text-center">
                Need landlord access? Sign in, then switch profiles from your dashboard.
            </div>
        </div>
    </section>
</div>
@endsection
