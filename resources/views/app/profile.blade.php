@extends('layouts.dashboard')

@section('title', 'Profile Settings - ZikoSpace')

@section('dashboard')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-6">
        <h1 class="text-3xl font-display font-bold text-gray-900">Profile Settings</h1>
        <p class="text-gray-600 mt-1">Manage your account information and preferences.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        <aside class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-md overflow-hidden sticky top-24">
                <nav class="flex flex-col">
                    <a href="#profile" class="px-6 py-4 border-l-4 border-purple-600 bg-purple-50 text-purple-700 font-medium">Profile Info</a>
                    <a href="#account" class="px-6 py-4 border-l-4 border-transparent hover:bg-gray-50 text-gray-700 hover:text-purple-600 transition">Account Settings</a>
                    <a href="#notifications" class="px-6 py-4 border-l-4 border-transparent hover:bg-gray-50 text-gray-700 hover:text-purple-600 transition">Notifications</a>
                    <a href="#security" class="px-6 py-4 border-l-4 border-transparent hover:bg-gray-50 text-gray-700 hover:text-purple-600 transition">Security</a>
                </nav>
            </div>
        </aside>

        <div class="lg:col-span-3 space-y-6">
            <section id="profile" class="bg-white rounded-xl shadow-md p-8">
                <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Profile Information</h2>
                <div class="flex items-center gap-6 mb-8">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 text-white flex items-center justify-center text-xl font-semibold">JD</div>
                    <div>
                        <button class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-5 py-2.5 rounded-lg hover:shadow-lg transition font-semibold">Upload New Photo</button>
                        <p class="text-sm text-gray-500 mt-2">JPG or PNG. Max size 2MB.</p>
                    </div>
                </div>

                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" value="John" class="mt-2 w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                        </div>
                        <div>
                            <label class="text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" value="Doe" class="mt-2 w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                        </div>
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" value="john.doe@example.com" class="mt-2 w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" value="+1 (555) 123-4567" class="mt-2 w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Bio</label>
                        <textarea rows="4" class="mt-2 w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">Looking for a comfortable apartment in downtown. Reliable tenant with excellent credit.</textarea>
                    </div>

                    <div class="flex justify-end gap-3">
                        <button type="button" class="px-5 py-2.5 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 transition">Cancel</button>
                        <button type="submit" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-2.5 rounded-lg hover:shadow-lg transition font-semibold">Save Changes</button>
                    </div>
                </form>
            </section>

            <section id="account" class="bg-white rounded-xl shadow-md p-8">
                <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Account Settings</h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                        <div>
                            <h3 class="font-semibold text-gray-900">Account Type</h3>
                            <p class="text-sm text-gray-600">Current plan: Free</p>
                        </div>
                        <button class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-5 py-2 rounded-lg hover:shadow-lg transition font-semibold">Upgrade to Pro</button>
                    </div>
                    <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                        <div>
                            <h3 class="font-semibold text-gray-900">Email Verification</h3>
                            <p class="text-sm text-green-600">Verified</p>
                        </div>
                        <span class="text-sm text-gray-500">john.doe@example.com</span>
                    </div>
                    <div class="flex items-center justify-between p-4 border border-red-200 rounded-lg bg-red-50">
                        <div>
                            <h3 class="font-semibold text-gray-900">Delete Account</h3>
                            <p class="text-sm text-gray-600">Permanently delete your account and data.</p>
                        </div>
                        <button class="text-red-600 hover:text-red-700 font-semibold">Delete</button>
                    </div>
                </div>
            </section>

            <section id="notifications" class="bg-white rounded-xl shadow-md p-8">
                <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Notification Preferences</h2>
                <div class="space-y-4">
                    <label class="flex items-center justify-between">
                        <span class="text-gray-700">Email updates</span>
                        <input type="checkbox" checked class="h-5 w-5 text-purple-600 rounded">
                    </label>
                    <label class="flex items-center justify-between">
                        <span class="text-gray-700">New property alerts</span>
                        <input type="checkbox" checked class="h-5 w-5 text-purple-600 rounded">
                    </label>
                    <label class="flex items-center justify-between">
                        <span class="text-gray-700">Message notifications</span>
                        <input type="checkbox" checked class="h-5 w-5 text-purple-600 rounded">
                    </label>
                </div>
            </section>

            <section id="security" class="bg-white rounded-xl shadow-md p-8">
                <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Security</h2>
                <form class="space-y-4">
                    <div>
                        <label class="text-sm font-medium text-gray-700">Current password</label>
                        <input type="password" placeholder="Current password" class="mt-2 w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">New password</label>
                        <input type="password" placeholder="New password" class="mt-2 w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700">Confirm new password</label>
                        <input type="password" placeholder="Confirm new password" class="mt-2 w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-200 focus:border-purple-500">
                    </div>
                    <button type="submit" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-2.5 rounded-lg hover:shadow-lg transition font-semibold">Update Password</button>
                </form>
            </section>
        </div>
    </div>
</div>
@endsection

