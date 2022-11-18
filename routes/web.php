<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Sohan\UserController;


Route::get('/', function () {
    return view('welcome');
});

\Illuminate\Support\Facades\Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Sohan Routes
Route::controller(UserController::class)->prefix('tasks')->group(function(){
    Route::get('/string-count','string_count_page')->name('user.string.count.page');
});
