<?php

use Illuminate\Support\Facades\Route;

Route::get('/jeux', [App\Http\Controllers\JeuController::class, 'index'])->name('jeux.index');

Route::get('/jeux/{id}', [App\Http\Controllers\JeuController::class, 'show'])->name('jeux.show');

Route::get('/tournois/{id}', [App\Http\Controllers\TournoiController::class, 'informationtournoi'])->name('tournois.informations');
