<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('usuario', UserController::class)->names('user')->parameters(['usuario' => 'user']);

Route::get('getUser', [UserController::class, 'getUser'])->name('getUser'); //Autentica o usuário e redireciona pra home
Route::get('home', [HomeController::class, 'index'])->name('home');
