<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;




Route::get('/' , [PublicController::class, 'homepage'])->name('homepage');

//creazione articolo
Route::get('/create/article' , [ArticleController::class, 'create'])->name('create.article');

//pagina tutti gli articoli creati 
Route::get('/article/index' , [ArticleController::class, 'index'])->name('article.index');

//Article show
Route::get('/show/article/{article}' , [ArticleController::class, 'show'])->name('article.show');

//categorie navbar
Route::get('/category/{category}' , [ArticleController::class, 'byCategory'])->name('byCategory');

//controller revisor
Route::get('/revisor/index' , [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accepted/{article}' , [RevisorController::class, 'accept'])->name('accept');
Route::patch('/rejected/{article}' , [RevisorController::class, 'reject'])->name('reject');

//MAIL

// Become Revisor
Route::get('/revisor/request' , [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
//make revisor
Route::get('/make/revisor/{user}' , [RevisorController::class, 'makeRevisor'])->name('make.revisor');

//RICERCA ARTICOLI
Route::get('/search/article' , [PublicController::class, 'searchArticles'])->name('article.search');

//CAMBIO LINGUA
Route::post('/lingua/{lang}' , [PublicController::class, 'setLanguage'])->name('setLocale');