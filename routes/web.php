<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/registration', RegistrationController::class)->name('registration');

Route::middleware('auth')->group(function() {
    Route::get('/auth', AuthenticationController::class)->name('auth');

    Route::get('/reset-password', PasswordResetController::class)->name('reset-password');

    Route::get('/profile', ProfileController::class)->name('profile');

    Route::post('/logout', function () {
        auth()->logout();
        return redirect('registration');
    })->name('logout');
});
