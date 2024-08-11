<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome', [
    'name' => 'Bryian',
    'greeting'=> 'Hello'
]);
Route::view('/about', 'about');
Route::view('/contacts', 'contacts');

//Resource gets all items route that are in the itemController (jobs, JobContoller)
Route::resource('jobs', JobController::class);

//Auth
Route::get('/register', [RegisteredUserController::class,'create']);
Route::post('/register', [RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);
