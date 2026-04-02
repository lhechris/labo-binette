<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

//Route::view('/welcome', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/article/{cat}/{nom}', \App\Livewire\ShowArticle::class)->name("article");

Route::get('/', \App\Livewire\Accueil::class)->name('accueil');

Route::get('/categorie/{nom}', \App\Livewire\ShowCategorie::class)->name("categorie");



require __DIR__.'/settings.php';
