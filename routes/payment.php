<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaymentController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/payments', [PaymentController::class, 'index'])
        ->name('payments');
    Route::get('/payments/create', [PaymentController::class, 'create'])
        ->name('payment.create');
    Route::get('/payments/edit/{payment}', [PaymentController::class, 'edit'])
        ->name('payment.edit');
    Route::put('/payments/{payment}/update', [PaymentController::class, 'update'])
        ->name('payment.update');
    Route::get('/payments/{payment}', [PaymentController::class, 'show'])
        ->name('payment.single');
    Route::post('/payments', [PaymentController::class, 'store'])
        ->name('payment.new');

    Route::delete('/payments/{payment}/delete', [PaymentController::class, 'destroy'])
        ->name('payment.delete');
});
