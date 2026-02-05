@extends('layouts.auth')

@section('title', 'ZikoSpace - Create Account')

@section('content')
<div class="min-h-screen grid lg:grid-cols-2">
    <section class="relative hidden lg:flex">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-indigo-900 to-purple-900"></div>
        <div class="absolute inset-0 sparkle"></div>
        <div class="relative z-10 p-12 flex flex-col justify-between text-white">
            <div>
                <h1 class="text-3xl font-display font-bold tracking-wide">ZikoSpace</h1>
            </div>
            <div>
                <p class="uppercase tracking-[0.4em] text-xs text-indigo-200 mb-4">Smart Renting</p>
                <h2 class="text-5xl font-display font-semibold leading-tight">
                    Find a place you love,
                    list a space you trust.
                </h2>
                <p class="text-indigo-100/90 mt-6 text-lg max-w-md">
                    Join a community of tenants and landlords with transparent listings, verified profiles, and easy applications.
                </p>
            </div>
            <div class="flex items-center gap-6 text-sm text-indigo-200">
                <div>
                    <div class="text-2xl font-semibold text-white">10K+</div>
                    <div>Listings</div>
                </div>
                <div>
                    <div class="text-2xl font-semibold text-white">5K+</div>
                    <div>Landlords</div>
                </div>
                <div>
                    <div class="text-2xl font-semibold text-white">15K+</div>
                    <div>Tenants</div>
                </div>
            </div>
        </div>
    </section>

    <section class="flex items-center justify-center px-6 py-14 lg:py-20">
        <div class="w-full max-w-lg">
            <div class="glass border border-white/60 shadow-2xl rounded-3xl p-8 sm:p-10">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <p class="text-xs uppercase tracking-[0.3em] text-purple-700 mb-2">Create account</p>
                        <h3 class="text-3xl font-display font-semibold text-slate-900">Welcome to ZikoSpace</h3>
                    </div>
                    <a href="/" class="text-sm font-semibold text-purple-700 hover:text-purple-900">Back home</a>
                </div>

                <div class="space-y-3 mb-6">
                    <button type="button" class="w-full flex items-center justify-center gap-3 px-6 py-3 border border-slate-200 rounded-xl hover:border-purple-400 hover:bg-purple-50 transition">
                        <span class="w-5 h-5 rounded-full bg-white flex items-center justify-center text-xs font-bold text-red-500 border border-slate-200">G</span>
                        <span class="font-medium text-slate-700">Sign up with Google</span>
                    </button>
                    <button type="button" class="w-full flex items-center justify-center gap-3 px-6 py-3 border border-slate-200 rounded-xl hover:border-purple-400 hover:bg-purple-50 transition">
                        <span class="w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-bold">f</span>
                        <span class="font-medium text-slate-700">Sign up with Facebook</span>
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

                @if ($errors->any())
                    <div class="rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="space-y-4" method="POST" action="{{ route('auth.register') }}">
                    @csrf
                    <div class="grid grid-cols-2 gap-3">
                        <label class="cursor-pointer">
                            <input type="radio" name="role" value="customer" class="sr-only peer" {{ old('role', 'customer') === 'customer' ? 'checked' : '' }}>
                            <span class="block py-3 rounded-xl bg-purple-700 text-white font-semibold shadow-lg shadow-purple-200/50 text-center peer-checked:bg-purple-700">
                                Tenant
                            </span>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="role" value="landlord" class="sr-only peer" {{ old('role') === 'landlord' ? 'checked' : '' }}>
                            <span class="block py-3 rounded-xl bg-white text-slate-700 font-semibold border border-slate-200 hover:border-purple-400 transition text-center peer-checked:bg-purple-700 peer-checked:text-white">
                                Landlord
                            </span>
                        </label>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="text-sm font-medium text-slate-700">First name</label>
                            <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="Alex" class="mt-2 w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition" required>
                        </div>
                        <div>
                            <label class="text-sm font-medium text-slate-700">Last name</label>
                            <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Johnson" class="mt-2 w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition" required>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-medium text-slate-700">Email address</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="you@email.com" class="mt-2 w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition" required>
                    </div>
                    <div>
                        <label class="text-sm font-medium text-slate-700">Phone</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+265 999 000 000" class="mt-2 w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition">
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="text-sm font-medium text-slate-700">Password</label>
                            <input type="password" name="password" placeholder="Create password" class="mt-2 w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition" required>
                        </div>
                        <div>
                            <label class="text-sm font-medium text-slate-700">Confirm</label>
                            <input type="password" name="password_confirmation" placeholder="Repeat password" class="mt-2 w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition" required>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 text-sm text-slate-600">
                        <input type="checkbox" class="mt-1 h-4 w-4 rounded border-slate-300 text-purple-600 focus:ring-purple-500">
                        <p>
                            I agree to ZikoSpace's
                            <a href="#" class="text-purple-700 font-semibold hover:text-purple-900">Terms</a>
                            and
                            <a href="#" class="text-purple-700 font-semibold hover:text-purple-900">Privacy Policy</a>.
                        </p>
                    </div>

                    <button type="submit" class="w-full mt-2 bg-slate-900 text-white py-3.5 rounded-xl font-semibold hover:bg-slate-800 transition">
                        Create account
                    </button>
                </form>

                <div class="mt-6 text-center text-sm text-slate-600">
                    Already have an account?
                    <a href="/signin" class="text-purple-700 font-semibold hover:text-purple-900">Sign in</a>
                </div>
            </div>

            <div class="mt-6 text-xs text-slate-500 text-center">
                By signing up, you can apply for rentals, save listings, and message landlords.
            </div>
        </div>
    </section>
</div>
@endsection
