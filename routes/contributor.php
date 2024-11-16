<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContributorController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/contributors', [ContributorController::class, 'index'])
        ->name('contributors');
    Route::get('/contributors/create', [ContributorController::class, 'create'])
        ->name('contributor.create');
    Route::get('/contributors/edit/{contributor}', [ContributorController::class, 'edit'])
        ->name('contributor.edit');
    Route::put('/contributors/{contributor}/update', [ContributorController::class, 'update'])
        ->name('contributor.update');
    Route::get('/contributors/{contributor}', [ContributorController::class, 'show'])
        ->name('contributor.single');
    Route::post('/contributors', [ContributorController::class, 'store'])
        ->name('contributor.new');

    Route::delete('/contributors/{contributor}/delete', [ContributorController::class, 'destroy'])
        ->name('contributor.delete');
});
