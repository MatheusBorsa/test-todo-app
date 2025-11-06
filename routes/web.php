<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('tasks.index')
        : redirect()->route('register');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
});

require __DIR__.'/auth.php';
