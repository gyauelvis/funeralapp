<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/projects', [ProjectController::class, 'index'])
        ->name('projects');
    Route::get('/projects/create', [ProjectController::class, 'create'])
        ->name('project.create');
    Route::get('/projects/edit/{project}', [ProjectController::class, 'edit'])
        ->name('project.edit');
    Route::put('/projects/{project}/update', [ProjectController::class, 'update'])
        ->name('project.update');
    Route::get('/projects/{project}', [ProjectController::class, 'show'])
        ->name('project.single');
    Route::post('/projects', [ProjectController::class, 'store'])
        ->name('project.new');

    Route::delete('/projects/{project}/delete', [ProjectController::class, 'destroy'])
        ->name('project.delete');
});
