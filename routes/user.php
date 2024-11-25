<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/users', [UserController::class, 'index'])
        ->name('users');
    Route::get('/users/create', [UserController::class, 'create'])
        ->name('user.create');
    Route::get('/users/edit/{user}', [UserController::class, 'edit'])
        ->name('user.edit');
    Route::put('/users/{user}/update', [UserController::class, 'update'])
        ->name('user.update');
    Route::get('/users/{user}', [UserController::class, 'show'])
        ->name('user.single');
    Route::post('/users', [UserController::class, 'store'])
        ->name('user.new');
    Route::delete('/users/{user}/delete', [UserController::class, 'destroy'])
        ->name('user.delete');

    Route::get('/roles', [RoleController::class, 'index'])
        ->name('roles');
    Route::get('/roles/create', [RoleController::class, 'create'])
        ->name('role.create');
    Route::get('/roles/edit/{role}', [RoleController::class, 'edit'])
        ->name('role.edit');
    Route::put('/roles/{role}/update', [RoleController::class, 'update'])
        ->name('role.update');
    Route::get('/roles/{role}', [RoleController::class, 'show'])
        ->name('role.single');
    Route::post('/roles', [RoleController::class, 'store'])
        ->name('role.new');
    Route::delete('/roles/{role}/delete', [RoleController::class, 'destroy'])
        ->name('role.delete');
});
