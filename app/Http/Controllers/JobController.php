<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{

    public function index(){
        $jobs = Job::with('employer')->latest()->paginate(30);
        return view('jobs.index',[
            'jobs' => $jobs
        ]);
    }

    public function create(){
        return view('jobs.create');
    }

    public function store(){
        request()->validate([
            'title' => ['required', 'min:3'],
            'Salary' => ['required']
        ]);

        Job::create([
            'title' => request('title'),
            'Salary' => request('Salary'),
            'employer_id' => 1
        ]);
        return redirect('/jobs');
    }

    public function show(Job $job){
        return view('jobs.show',['job'=> $job]);
    }

    public function edit(Job $job){
        Gate::authorize('edit-job',$job);


        return view('jobs.edit',['job'=> $job]);
    }

    public function update( Job $job){
        //Validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'Salary' => ['required']
        ]);

        // Authorize(On Hold...)

        $job->update([
            'title' => request('title'),
            'Salary' => request('Salary')
        ]);

        //Redirect
        return redirect('/jobs/' . $job->id );
    }

    public function destroy(Job $job){
        // Authorize(On Hold...)

        //Delete The Job
        $job->delete();

        //Redirect
        return redirect('/jobs');
    }
}
