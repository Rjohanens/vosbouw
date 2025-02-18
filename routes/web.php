<?php

use App\Livewire\Auth\Dashboard;
use App\Livewire\Website\Pages\Home;
use Illuminate\Support\Facades\Route;
use App\Livewire\Website\Pages\Projects;
use App\Livewire\Website\Pages\Services;
use App\Livewire\Website\Pages\ProjectShow;
use App\Livewire\Website\Pages\ServiceShow;
use App\Livewire\Website\Pages\Contact;
use App\Http\Controllers\Auth\AuthController;
use App\Livewire\Auth\PageView\Index;
use App\Livewire\Auth\Project\Index as ProjectIndex;
use App\Livewire\Auth\Service\Index as ServiceIndex;
use App\Livewire\Auth\Category\Index as CategoryIndex;

Route::get('/', Home::class)->name('home');
Route::get('/diensten', Services::class)->name('services');
Route::get('projecten', Projects::class)->name('project.index');
Route::get('project/{project:slug}', ProjectShow::class)->name('project.show');
Route::get('service', Services::class)->name('service.index');
Route::get('service/{service:slug}', ServiceShow::class)->name('service.show');
Route::get('/contact', Contact::class)->name('contact.index');

Route::get('/login', [AuthController::class, 'show'])->name('auth.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::prefix('/auth')->name('auth.')->middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/project', ProjectIndex::class)->name('project.index');
    Route::get('/service', ServiceIndex::class)->name('service.index');
    Route::get('/category', CategoryIndex::class)->name('category.index');
    Route::get('/page-views', Index::class)->name('page-views.index');
});
