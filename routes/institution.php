<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InstitutionController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/institutions', [InstitutionController::class, 'index'])
        ->name('institutions');
    Route::get('/institutions/create', [InstitutionController::class, 'create'])
        ->name('institution.create');
    Route::get('/institutions/edit/{institution}', [InstitutionController::class, 'edit'])
        ->name('institution.edit');
    Route::put('/institutions/{institution}/update', [InstitutionController::class, 'update'])
        ->name('institution.update');
    Route::get('/institutions/{institution}', [InstitutionController::class, 'show'])
        ->name('institution.single');
    Route::post('/institutions', [InstitutionController::class, 'store'])
        ->name('institution.new');
    Route::delete('/institutions/{institution}/delete', [InstitutionController::class, 'destroy'])
        ->name('institution.delete');
});
