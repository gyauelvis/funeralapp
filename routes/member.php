<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/members', [MemberController::class, 'index'])
        ->name('members');
    Route::get('/members/create', [MemberController::class, 'create'])
        ->name('member.create');
    Route::get('/members/edit/{contributor}', [MemberController::class, 'edit'])
        ->name('member.edit');
    Route::put('/members/{contributor}/update', [MemberController::class, 'update'])
        ->name('member.update');
    Route::get('/members/{contributor}', [MemberController::class, 'show'])
        ->name('member.single');
    Route::post('/members', [MemberController::class, 'store'])
        ->name('member.new');
    Route::delete('/members/{contributor}/delete', [MemberController::class, 'destroy'])
        ->name('member.delete');
});
