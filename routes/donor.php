<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DonorController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/donors', [DonorController::class, 'index'])
        ->name('donors');
    Route::get('/donors/edit/{contributor}', [DonorController::class, 'edit'])
        ->name('donor.edit');
    Route::put('/donors/{contributor}/update', [DonorController::class, 'update'])
        ->name('donor.update');
    Route::get('/donors/{contributor}', [DonorController::class, 'show'])
        ->name('donor.single');
    Route::delete('/donors/{contributor}/delete', [DonorController::class, 'destroy'])
        ->name('donor.delete');
});
