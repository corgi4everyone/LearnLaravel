<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;




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
