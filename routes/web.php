<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';


Route::prefix('/auth')->group(function () {

    Route::view('/category', 'auth.category')->name('auth.category');
    Route::view('/citizen', 'auth.citizen.index')->name('auth.citizen.index');
})->middleware(['auth', 'verified']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // Admin panel
    Route::prefix('/admin')->group(function () {

        Route::view('/student', 'admin.student.base-view')->name('admin.student.base-view');

        Route::view('/room', 'admin.room.base-view')->name('admin.room.base-view');
    });

    Route::prefix('/review')->group(function () {

        Route::view('/student', 'review.student.base-view')->name('review.student.base-view');
    });
});
