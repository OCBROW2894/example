<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome', [
    'name' => 'Bryian',
    'greeting'=> 'Hello'
]);
Route::view('/about', 'about');
Route::view('/contacts', 'contacts');


//Grouping Routes together
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});



