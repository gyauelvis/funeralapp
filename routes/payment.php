<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaymentController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/contributions', [PaymentController::class, 'index'])
        ->name('payments');
    Route::get('/contributions/create', [PaymentController::class, 'create'])
        ->name('payment.create');
    Route::get('/contributions/edit/{payment}', [PaymentController::class, 'edit'])
        ->name('payment.edit');
    Route::put('/contributions/{payment}/update', [PaymentController::class, 'update'])
        ->name('payment.update');
    Route::get('/contributions/{payment}', [PaymentController::class, 'show'])
        ->name('payment.single');
    Route::post('/contributions', [PaymentController::class, 'store'])
        ->name('payment.new');

    Route::delete('/contributions/{payment}/delete', [PaymentController::class, 'destroy'])
        ->name('payment.delete');
});
