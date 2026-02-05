@extends('layouts.dashboard')

@section('title', 'Messages - ZikoSpace')

@section('sidebar')
@include('app.partials.customer-sidebar')
@endsection

@section('styles')
<style>
    .chat-container {
        height: calc(100vh - 240px);
    }
</style>
@endsection

@section('dashboard')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-6">
        <h1 class="text-3xl font-display font-bold text-gray-900">Messages</h1>
        <p class="text-gray-600 mt-1">Chat with landlords about listings and viewings.</p>
    </div>

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-3 chat-container">
            <aside class="lg:col-span-1 border-r border-gray-200 overflow-y-auto">
                <div class="p-4 border-b border-gray-200">
                    <input type="text" placeholder="Search landlords" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                </div>

                <div class="divide-y divide-gray-100">
                    <button class="w-full text-left p-4 hover:bg-purple-50 border-l-4 border-purple-600 bg-purple-50">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-emerald-500 text-white flex items-center justify-center text-sm font-semibold">SJ</div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-semibold text-gray-900">Sarah Johnson</h3>
                                    <span class="text-xs text-gray-500">2m ago</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Yes, I am available tomorrow at 2 PM.</p>
                            </div>
                        </div>
                    </button>
                </div>
            </aside>

            <section class="lg:col-span-2 flex flex-col">
                <div class="p-4 border-b border-gray-200 bg-white">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-full bg-emerald-500 text-white flex items-center justify-center text-sm font-semibold">SJ</div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Sarah Johnson</h3>
                                <p class="text-sm text-gray-500">Landlord • Online</p>
                            </div>
                        </div>
                        <a href="/property-detail" class="text-purple-600 text-sm font-semibold hover:text-purple-700">View Property</a>
                    </div>
                </div>

                <div class="flex-1 overflow-y-auto p-6 space-y-4 bg-slate-50">
                    <div class="text-xs text-gray-500 text-center">Today</div>

                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-emerald-500 text-white flex items-center justify-center text-xs font-semibold">SJ</div>
                        <div class="bg-white rounded-2xl rounded-tl-none p-4 shadow-sm max-w-md">
                            <p class="text-gray-800">Hi! I would be happy to schedule a viewing for you.</p>
                            <span class="text-xs text-gray-400 mt-2 block">10:30 AM</span>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-2xl rounded-tr-none p-4 shadow-sm max-w-md">
                            <p>Great! Would tomorrow afternoon work for you?</p>
                            <span class="text-xs text-purple-100 mt-2 block">10:32 AM</span>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-white border-t border-gray-200">
                    <div class="flex items-center gap-3">
                        <input type="text" placeholder="Type a message to the landlord" class="flex-1 px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                        <button class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transition">
                            Send
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
