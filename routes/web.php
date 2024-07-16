<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
    return view('jobs',[
        'jobs'=> [
            ['id' => 1,
            'title'=> 'Software Engineer',
            'Salary'=> '$300,000'
        ], [
            'id' => 2,
            'title'=> 'Doctor',
            'Salary'=> '$1,000,000'
        ], [
            'id' => 3,
            'title'=> 'Lawyer',
            'Salary'=> '$500,000'
        ],[
            'id' => 4,
            'title'=> 'Pilot',
            'Salary'=> '$10,000,000'
        ]
      ]
    ]);
});

Route::get('/jobs/{id}', function ( $id) {
    $jobs = [
        ['id' => 1,
        'title'=> 'Software Engineer',
        'Salary'=> '$300,000'
    ], [
        'id' => 2,
        'title'=> 'Doctor',
        'Salary'=> '$1,000,000'
    ], [
        'id' => 3,
        'title'=> 'Lawyer',
        'Salary'=> '$500,000'
    ],[
        'id' => 4,
        'title'=> 'Pilot',
        'Salary'=> '$10,000,000'
    ]
    ];
    $job=Arr::first( $jobs, fn($job) => $job['id'] == $id); //Search the job that has the matching id

    return view('job',['job'=> $job]);// when the job is found it is loaded to the view
});