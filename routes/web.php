<?php

use Illuminate\Support\Facades\Route;

class Job
{
    public static function getAllJobs(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Director',
                'salary' => '$50,000',
            ],
            [
                'id' => '2',
                'title' => 'Programmer',
                'salary' => '$40,000',
            ],
            [
                'id' => '3',
                'title' => 'Doctor',
                'salary' => '$30,000',
            ],

        ];
    }
}


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::getAllJobs(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {


    $job = Arr::first(Job::getAllJobs(), fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
