<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome', [
    'name' => 'Bryian',
    'greeting'=> 'Hello'
]);
Route::view('/about', 'about');
Route::view('/contacts', 'contacts');

//Resource gets all items route that are in the itemController (jobs, JobContoller)
Route::resource('jobs', JobController::class);
