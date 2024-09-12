<?php

use App\Livewire\Auth\Dashboard;
use App\Livewire\Auth\Project\Index;
use App\Livewire\Website\Pages\Home;
use Illuminate\Support\Facades\Route;
use App\Livewire\Website\Pages\Projects;
use App\Livewire\Website\Pages\Services;
use App\Livewire\Website\Pages\ProjectShow;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', Home::class)->name('home');
Route::get('/diensten', Services::class)->name('services');
Route::get('projecten', Projects::class)->name('project.index');
Route::get('project/{project}', ProjectShow::class)->name('project.show');
Route::get('service', Services::class)->name('service.index');

Route::get('/login', [AuthController::class, 'show'])->name('auth.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::prefix('/auth')->name('auth.')->middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::prefix('/project')->name('project.')->group(function () {
        Route::get('', Index::class)->name('index');
    });
});
