<?php

use Illuminate\Support\Facades\Route;
//use Laravel\Socialite\Facades\Socialite;

//Route::view('/welcome', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/', \App\Livewire\ShowAccueil::class)->name('accueil');

Route::get('/categorie/{nom}/{article}', \App\Livewire\ShowCategorie::class)->name("categorie");

Route::get('/partenaires', \App\Livewire\ShowPartenaires::class)->name('partenaires');

require __DIR__.'/settings.php';
