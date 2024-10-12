<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', [userController::class,'welcomepage']);
Route::resource('crud',userController::class);
Route::delete('/deleteall', [userController::class, 'deleteall'])->name('deleteall');

