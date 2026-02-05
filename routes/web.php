<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }

    return view('index');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/signup', [AuthController::class, 'showSignup'])->middleware('guest')->name('signup');
Route::post('/signup', [AuthController::class, 'register'])->middleware('guest')->name('auth.register');

Route::get('/signin', [AuthController::class, 'showSignin'])->middleware('guest')->name('signin');
Route::post('/signin', [AuthController::class, 'login'])->middleware('guest')->name('auth.login');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('auth.logout');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/search-results', function () {
    return view('search-results');
});

Route::get('/browse', function () {
    if (Auth::check() && Auth::user()?->role?->name === 'landlord') {
        return view('app.landlord-properties');
    }

    if (Auth::check()) {
        return view('app.customer-browse');
    }

    return view('search-results');
})->name('browse');

Route::get('/add-property', function () {
    return view('app.add-property');
})->middleware(['auth', 'role:landlord'])->name('property.add');

Route::get('/property-detail', function () {
    return view('property-detail');
});

Route::get('/booking-confirmation', function () {
    return view('app.booking-confirmation');
})->middleware('auth')->name('booking.confirmation');

Route::get('/customer/viewings', function () {
    return view('app.customer-viewings');
})->middleware(['auth', 'role:customer'])->name('customer.viewings');

Route::get('/customer/saved', function () {
    return view('app.customer-saved');
})->middleware(['auth', 'role:customer'])->name('customer.saved');

Route::get('/customer/apply', function () {
    return view('app.customer-application');
})->middleware(['auth', 'role:customer'])->name('customer.apply');

Route::get('/landlord/viewings', function () {
    return view('app.landlord-viewings');
})->middleware(['auth', 'role:landlord'])->name('landlord.viewings');

Route::get('/landlord/applications', function () {
    return view('app.landlord-applications');
})->middleware(['auth', 'role:landlord'])->name('landlord.applications');

Route::get('/messages', function () {
    if (Auth::check() && Auth::user()?->role?->name === 'landlord') {
        return view('app.landlord-messages');
    }

    return view('app.customer-messages');
})->middleware('auth')->name('messages');

Route::get('/profile', function () {
    return view('app.profile');
})->middleware('auth')->name('profile');

Route::get('/landlord-dashboard', function () {
    return view('app.landlord-dashboard');
})->middleware(['auth', 'role:landlord'])->name('landlord.dashboard');

Route::get('/customer-dashboard', function () {
    return view('app.customer-dashboard');
})->middleware(['auth', 'role:customer'])->name('customer.dashboard');

Route::get('/admin-dashboard', function () {
    return view('app.admin-dashboard');
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');
