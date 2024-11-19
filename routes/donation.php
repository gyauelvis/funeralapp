<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DonationController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/donations', [DonationController::class, 'index'])
        ->name('donations');
    Route::get('/donations/create', [DonationController::class, 'create'])
        ->name('donation.create');
    Route::get('/donations/edit/{donation}', [DonationController::class, 'edit'])
        ->name('donation.edit');
    Route::put('/donations/{donation}/update', [DonationController::class, 'update'])
        ->name('donation.update');
    Route::get('/donations/{donation}', [DonationController::class, 'show'])
        ->name('donation.single');
    Route::post('/donations', [DonationController::class, 'store'])
        ->name('donation.new');
    Route::delete('/donations/{donation}/delete', [DonationController::class, 'destroy'])
        ->name('donation.delete');
});
