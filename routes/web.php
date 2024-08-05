<?php

use App\Http\Controllers\Auth\AuthController;
use App\Livewire\Auth\Dashboard;
use App\Livewire\Auth\Project\Index;
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/login', [AuthController::class, 'show'])->name('auth.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::prefix('/auth')->name('auth.')->middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::prefix('/project')->name('project.')->group(function () {
        Route::get('', Index::class)->name('index');
    });
});
