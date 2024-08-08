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

// Index (Displays All Jobs)
Route::get('/jobs', function () {
   $jobs = Job::with('employer')->latest()->paginate(30);
    //$jobs = Job::with('employer')->simplePaginate(30);
    return view('jobs.index',[
        'jobs' => $jobs
    ]);
});

//Create (Displays a Form To Create a job)
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//Store(Stores a New Job To The DataBase)
Route::post('/jobs', function () {
    request()->validate([
        /*
         *  To Get More About Validation Visit :- Laravel.com/docs/Validation
         */
        'title' => ['required', 'min:3'],
        'Salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'Salary' => request('Salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

//Show (Displays A Page To show The Job)
Route::get('/jobs/{id}', function ( $id) {
  $job = Job::find($id);
   // $job=Arr::first( job::all(), fn($job) => $job['id'] == $id); //Search the job that has the matching id

    return view('jobs.show',['job'=> $job]);// when the job is found it is loaded to the view
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job= Job:: find($id);

    return view('jobs.edit',['job'=> $job]);
});

//Edit

//Update
Route::patch('/jobs/{id}', function ($id) {// Patch-Is A Set Of instructions for how to Modify Resources
    //Validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'Salary' => ['required']
    ]);

    //Authorize (On Hold...)

    //Update the Job
    $job = Job::findOrFail($id);

/*
    $job->title = request('title');
    $job->Salary = request('Salary');
    $job->save();
*/

    //Another way of Updating
    $job->update([
        'title' => request('title'),
        'Salary' => request('Salary')
    ]);

    //Redirect
    return redirect('/jobs/' . $job->id );
});


//Destroy
Route::delete('/jobs/{id}', function ($id) {// Delete-Remove The Specified Resource
// Authorize(On Hold...)

    //Delete The Job
    $job = Job::findOrFail($id);
    $job->delete();

    //Redirect
    return redirect('/jobs');
});
