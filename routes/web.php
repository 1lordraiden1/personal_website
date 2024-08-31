<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

use App\Models\Job;





Route::get('/', function () {

    return view('home');
});


Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(10);
    return view(
        'jobs.index',
        [
            'jobs' => $jobs,
        ]
    );
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});



Route::get('jobs/{id}', function ($id) { // This url acts like jobs/ so If you put the jobs/create under this it will fail

    $job = Job::find($id);

    return view('jobs.show')->with('job', $job);

});

Route::post('/jobs', function () {

    // validation
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');

});




Route::get('/contact', function () {
    return view('contact');
});

