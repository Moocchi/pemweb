<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\ShowHomePage;
use App\Livewire\ShowProfile;
use App\Livewire\ShowMainMenu;

Route::get('/',ShowHomePage::class)->name('home');
Route::get('/profile', ShowProfile::class)->name('profile');
Route::get('/main-menu', ShowMainMenu::class)->name('main-menu');