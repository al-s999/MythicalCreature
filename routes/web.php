<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatureController;

Route::get('/', [CreatureController::class, 'index'])->name('home');
Route::get('/creature/{slug}', [CreatureController::class, 'show'])->name('creature.show');