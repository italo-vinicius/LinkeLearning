<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('usuario', UserController::class)->names('user')->parameters(['usuario' => 'user']);

Route::get('getUser', [UserController::class, 'getUser'])->name('getUser'); //Autentica o usuário e redireciona pra home
Route::get('home/{id}', [HomeController::class, 'index'])->name('homePage');
Route::post('home/{id}/createPost', [HomeController::class, 'createPost'])->name('createPost');


Route::get('home/{id}/timeline', [HomeController::class, 'showTimeline'])->name('timeline');
Route::get('home/{id}/timeline/{post}', [HomeController::class, 'editPost'])->name('editPost');
Route::put('home/{post}', [HomeController::class, 'updatePost'])->name('updatePost');
Route::delete('home/{post}', [HomeController::class, 'deletePost'])->name('deletePost');
