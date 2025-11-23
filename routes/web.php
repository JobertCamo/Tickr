<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('/employee/dashboard', 'employee.dashboard');
Route::view('/employee/attendance', 'employee.attendance');
Route::view('/employee/compliance', 'employee.compliance');

require __DIR__.'/auth.php';
