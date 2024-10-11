<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Actions\Logout;

Route::view('/', 'home')
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('logout', function (Logout $logout){
    $logout();
    return redirect('/');
});

require __DIR__.'/auth.php';
