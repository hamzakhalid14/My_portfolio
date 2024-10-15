<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Page d'accueil
Route::get('/', [PortfolioController::class, 'home'])->name('home');

// Pages individuelles
Route::get('/formation', [PortfolioController::class, 'formation'])->name('formation');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'sendContactForm'])->name('contact.submit');

