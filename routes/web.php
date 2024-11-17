<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/register-institution', function () {
        return view('register-institution.register-institution');
    })->name('register-institution');
    Route::get('/app/dashboard', function () {
        return view('app.app-dashbord');
    })->name('app-dashboard');
    Route::get('/register-member', function () {
        return view('register-member');
    })->name('register-member');
    Route::get('/register-donor', function () {
        return view('register-donor');
    })->name('register-nor');
});
