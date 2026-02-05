<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/search-results', function () {
    return view('search-results');
});

Route::get('/add-property', function () {
    return view('app.add-property');
});

Route::get('/property-detail', function () {
    return view('property-detail');
});

Route::get('/booking-confirmation', function () {
    return view('app.booking-confirmation');
});

Route::get('/messages', function () {
    return view('app.messages');
});

Route::get('/profile', function () {
    return view('app.profile');
});

Route::get('/landlord-dashboard', function () {
    return view('app.landlord-dashboard');
});

Route::get('/customer-dashboard', function () {
    return view('app.customer-dashboard');
});

Route::get('/admin-dashboard', function () {
    return view('app.admin-dashboard');
});
