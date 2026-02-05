@extends('layouts.app')

@section('title', 'Add Property - PropertyHub')

@section('styles')
<style>
    .step-indicator {
        transition: all 0.3s;
    }
    .step-indicator.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    .step-indicator.completed {
        background: #10b981;
        color: white;
    }
    .upload-area {
        border: 2px dashed #d1d5db;
        transition: all 0.3s;
    }
    .upload-area:hover {
        border-color: #667eea;
        background: rgba(102, 126, 234, 0.05);
    }
</style>
@endsection

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-10">
        <div>
            <h1 class="text-4xl font-display font-bold text-gray-900">List Your Property</h1>
            <p class="text-gray-600 mt-2">Fill in the details below to create your listing.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="/landlord-dashboard" class="text-gray-700 hover:text-purple-600 font-medium">Cancel</a>
            <a href="/landlord-dashboard" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-2.5 rounded-full hover:shadow-lg transition-all">
                Save Draft
            </a>
        </div>
    </div>

    <div class="mb-10">
        <div class="flex items-center justify-between">
            <div class="flex flex-col items-center flex-1">
                <div class="step-indicator active w-12 h-12 rounded-full flex items-center justify-center font-bold mb-2">1</div>
                <span class="text-sm font-medium text-gray-900">Basic Info</span>
            </div>
            <div class="flex-1 h-1 bg-gray-200 mx-4"></div>
            <div class="flex flex-col items-center flex-1">
                <div class="step-indicator w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center font-bold mb-2 text-gray-600">2</div>
                <span class="text-sm font-medium text-gray-600">Details</span>
            </div>
            <div class="flex-1 h-1 bg-gray-200 mx-4"></div>
            <div class="flex flex-col items-center flex-1">
                <div class="step-indicator w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center font-bold mb-2 text-gray-600">3</div>
                <span class="text-sm font-medium text-gray-600">Photos</span>
            </div>
            <div class="flex-1 h-1 bg-gray-200 mx-4"></div>
            <div class="flex flex-col items-center flex-1">
                <div class="step-indicator w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center font-bold mb-2 text-gray-600">4</div>
                <span class="text-sm font-medium text-gray-600">Review</span>
            </div>
        </div>
    </div>

    <form class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
        <div class="mb-8">
            <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Basic Information</h2>
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Property Title</label>
                    <input type="text" placeholder="Modern Downtown Apartment with City Views" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    <p class="text-sm text-gray-500 mt-1">Highlight your property's best features.</p>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Listing Type</label>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="flex items-center p-4 border-2 border-purple-600 bg-purple-50 rounded-xl cursor-pointer">
                            <input type="radio" name="listing_type" value="rent" class="mr-3" checked>
                            <div>
                                <div class="font-semibold text-gray-900">For Rent</div>
                                <div class="text-sm text-gray-600">Monthly rental</div>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-purple-400">
                            <input type="radio" name="listing_type" value="sale" class="mr-3">
                            <div>
                                <div class="font-semibold text-gray-900">For Sale</div>
                                <div class="text-sm text-gray-600">One-time purchase</div>
                            </div>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Property Type</label>
                    <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option>Select property type</option>
                        <option>House</option>
                        <option selected>Apartment</option>
                        <option>Hotel or Lodge</option>
                        <option>Farm</option>
                        <option>Land (Plot)</option>
                        <option>Commercial Space</option>
                        <option>Warehouse</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-900 mb-2">Price</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-600 font-semibold">$</span>
                            <input type="number" placeholder="1,200" class="w-full pl-8 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Monthly rent or sale price.</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-900 mb-2">Security Deposit</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-600 font-semibold">$</span>
                            <input type="number" placeholder="1,200" class="w-full pl-8 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                        <p class="text-sm text-gray-500 mt-1">For rentals only.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Location</h2>
            <div class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-900 mb-2">Region or District</label>
                        <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                            <option>Select region</option>
                            <option selected>Central Region</option>
                            <option>Southern Region</option>
                            <option>Northern Region</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-900 mb-2">City</label>
                        <input type="text" placeholder="Lilongwe" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Area or Neighborhood</label>
                    <input type="text" placeholder="Downtown, Area 47, City Center" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Full Address</label>
                    <textarea rows="2" placeholder="Street address, landmarks, building name" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
                    <p class="text-sm text-gray-500 mt-1">Exact address will only be shared after a viewing is confirmed.</p>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Property Details</h2>
            <div class="space-y-6">
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-900 mb-2">Bedrooms</label>
                        <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                            <option>Studio</option>
                            <option>1 Bedroom</option>
                            <option selected>2 Bedrooms</option>
                            <option>3 Bedrooms</option>
                            <option>4 Bedrooms</option>
                            <option>5+ Bedrooms</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-900 mb-2">Bathrooms</label>
                        <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                            <option>1 Bathroom</option>
                            <option selected>2 Bathrooms</option>
                            <option>3 Bathrooms</option>
                            <option>4+ Bathrooms</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-900 mb-2">Square Footage</label>
                        <input type="number" placeholder="1,200" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Furnishing</label>
                    <div class="grid grid-cols-3 gap-4">
                        <label class="flex items-center p-4 border-2 border-purple-600 bg-purple-50 rounded-xl cursor-pointer">
                            <input type="radio" name="furnishing" value="unfurnished" class="mr-3" checked>
                            <span class="font-medium text-gray-900">Unfurnished</span>
                        </label>
                        <label class="flex items-center p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-purple-400">
                            <input type="radio" name="furnishing" value="semi" class="mr-3">
                            <span class="font-medium text-gray-900">Semi-furnished</span>
                        </label>
                        <label class="flex items-center p-4 border-2 border-gray-200 rounded-xl cursor-pointer hover:border-purple-400">
                            <input type="radio" name="furnishing" value="fully" class="mr-3">
                            <span class="font-medium text-gray-900">Fully Furnished</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Available From</label>
                    <input type="date" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Description</h2>
            <div>
                <label class="block text-sm font-semibold text-gray-900 mb-2">Property Description</label>
                <textarea rows="6" placeholder="Describe your property in detail." class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
                <p class="text-sm text-gray-500 mt-1">Minimum 100 characters. Be detailed and honest.</p>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Amenities and Features</h2>
            <div class="grid md:grid-cols-3 gap-4">
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded" checked>
                    <span class="font-medium text-gray-900">24/7 Security</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded" checked>
                    <span class="font-medium text-gray-900">Parking</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded" checked>
                    <span class="font-medium text-gray-900">Backup Generator</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded" checked>
                    <span class="font-medium text-gray-900">Water Storage</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded" checked>
                    <span class="font-medium text-gray-900">WiFi Available</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded">
                    <span class="font-medium text-gray-900">Swimming Pool</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded">
                    <span class="font-medium text-gray-900">Gym or Fitness Center</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded" checked>
                    <span class="font-medium text-gray-900">Air Conditioning</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded">
                    <span class="font-medium text-gray-900">Garden or Yard</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded">
                    <span class="font-medium text-gray-900">Balcony or Terrace</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded">
                    <span class="font-medium text-gray-900">Laundry Facilities</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-purple-50 hover:border-purple-400">
                    <input type="checkbox" class="mr-3 w-5 h-5 text-purple-600 rounded">
                    <span class="font-medium text-gray-900">Elevator</span>
                </label>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Property Photos</h2>
            <div class="upload-area rounded-2xl p-8 text-center cursor-pointer mb-6">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                </svg>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Click to upload or drag and drop</h3>
                <p class="text-gray-600 mb-1">PNG, JPG, JPEG up to 10MB each</p>
                <p class="text-sm text-gray-500">Upload at least 5 high-quality photos</p>
                <button type="button" class="mt-4 px-6 py-3 bg-purple-600 text-white rounded-xl font-semibold hover:bg-purple-700 transition">Choose Files</button>
            </div>

            <div class="grid grid-cols-4 gap-4">
                <div class="relative h-32 bg-gradient-to-br from-purple-200 to-indigo-300 rounded-xl flex items-center justify-center">
                    <span class="text-white font-semibold">Photo 1</span>
                    <button class="absolute top-2 right-2 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-100">
                        <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    <span class="absolute bottom-2 left-2 bg-purple-600 text-white text-xs px-2 py-1 rounded-full">Main</span>
                </div>
                <div class="h-32 bg-gray-100 rounded-xl border-2 border-dashed border-gray-300 flex items-center justify-center">
                    <span class="text-gray-400 text-sm">Add Photo</span>
                </div>
                <div class="h-32 bg-gray-100 rounded-xl border-2 border-dashed border-gray-300 flex items-center justify-center">
                    <span class="text-gray-400 text-sm">Add Photo</span>
                </div>
                <div class="h-32 bg-gray-100 rounded-xl border-2 border-dashed border-gray-300 flex items-center justify-center">
                    <span class="text-gray-400 text-sm">Add Photo</span>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">House Rules</h2>
            <div class="space-y-4">
                <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl">
                    <span class="font-medium text-gray-900">Pets Allowed</span>
                    <input type="checkbox" class="w-5 h-5 text-purple-600 rounded">
                </label>
                <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl">
                    <span class="font-medium text-gray-900">Smoking Allowed</span>
                    <input type="checkbox" class="w-5 h-5 text-purple-600 rounded">
                </label>
                <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl">
                    <span class="font-medium text-gray-900">Visitors Allowed</span>
                    <input type="checkbox" class="w-5 h-5 text-purple-600 rounded" checked>
                </label>
            </div>

            <div class="mt-6">
                <label class="block text-sm font-semibold text-gray-900 mb-2">Additional Rules</label>
                <textarea rows="3" placeholder="Any other rules tenants should know about" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
            </div>
        </div>

        <div class="flex items-center gap-4 pt-6 border-t border-gray-200">
            <button type="button" class="px-8 py-3 bg-gray-100 text-gray-700 rounded-xl font-semibold hover:bg-gray-200 transition">Save as Draft</button>
            <a href="/landlord-dashboard" class="flex-1 text-center px-8 py-4 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-xl font-semibold hover:shadow-lg transition">Continue to Photos</a>
        </div>
    </form>
</div>
@endsection
