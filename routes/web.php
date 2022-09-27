<?php

use App\Http\Controllers\XdebugController;
use Illuminate\Support\Facades\Route;

Route::get('xdebug', [XdebugController::class, 'xdebug']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
