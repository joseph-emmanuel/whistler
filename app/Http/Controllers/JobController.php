<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::latest()->paginate(5);

        return view('jobs.index', compact('jobs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'job_reference_no' => 'required',
            'job_created_at' => 'required',
            'job_end_at' => 'required',
            'job_technologies' => 'required',
            'job_salary' => 'required',
            'job_listed_platform' => 'required',
            'job_description' => 'required',
        ]);

        Job::create($request->all());

        return redirect()->route('jobs.index')
                        ->with('success', 'Job created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'job_title' => 'required',
            'job_reference_no' => 'required',
            'job_created_at' => 'required',
            'job_end_at' => 'required',
            'job_technologies' => 'required',
            'job_salary' => 'required',
            'job_listed_platform' => 'required',
            'job_description' => 'required',
        ]);

        $job->update($request->all());

        return redirect()->route('jobs.index')
                        ->with('success', 'Job updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')
                        ->with('success', 'Job deleted successfully');
    }
}
