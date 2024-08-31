<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->orderBy('updated_at', 'desc')->paginate(10);
        return view(
            'jobs.index',
            [
                'jobs' => $jobs,
            ]
        );
    }

    public function create()
    {
        return view('jobs.create');
    }


    public function show(Job $job)
    {
        return view('jobs.show')->with('job', $job);
    }

    public function store(Request $request)
    {
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
    }

    public function edit(Job $job)
    {
        return view('jobs.edit')->with('job', $job);
    }

    public function update(Request $request, Job $job)
    {
        // validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        // auth (on hold)

        // update the job
        // No need if the route model binding works

        // and persist
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        // redirect
        return redirect('/jobs/' . $job->id);
    }

    public function destroy($id)
    {

        $job = Job::find($id);
        $job->delete();

        //redirect
        return redirect('/jobs');
    }
}