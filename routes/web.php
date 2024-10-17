<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', [userController::class,'welcomepage']);
Route::resource('users',userController::class);
Route::get('search', [UserController::class,'search'])->name('search');
Route::delete('/deleteall', [userController::class,'deleteall'])->name('deleteall');



