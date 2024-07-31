<?php

//use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome',[
        'name' => 'Bryian',
        'greeting'=> 'Hello'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/jobs', function () {
   $jobs = Job::with('employer')->latest()->paginate(30);
    //$jobs = Job::with('employer')->simplePaginate(30);
    return view('jobs.index',[
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::post('/jobs', function () {
    //Validation...

    Job::create([
        'title' => request('title'),
        'Salary' => request('Salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});
Route::get('/jobs/{id}', function ( $id) {
  $job = Job::find($id);
   // $job=Arr::first( job::all(), fn($job) => $job['id'] == $id); //Search the job that has the matching id

    return view('jobs.show',['job'=> $job]);// when the job is found it is loaded to the view
});
