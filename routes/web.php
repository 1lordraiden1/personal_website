<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

use App\Models\Job;





Route::view('/', 'home');

/* Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get(
        'jobs/{job}',
        'show'
    ); // if the name in url matches the variable and class name and the taken value no need to find the item
    Route::post('/jobs', 'store');
    Route::get(
        'jobs/{job}/edit',
        'edit'
    ); // This url acts like jobs/ so If you put the jobs/create under this it will fail
    Route::patch(
        'jobs/{job}',
        'update'
    ); // This url acts like jobs/ so If you put the jobs/create under this it will fail
    Route::delete('jobs/{id}', 'destroy');
}); */

Route::resource('jobs', JobController::class); // only & except to require specific methods inside controller

Route::view('/contact', 'contact');

