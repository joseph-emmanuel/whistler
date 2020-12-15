<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::latest()->paginate(5);

        return view('applications.index', compact('applications'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applications.create');
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

            'status' => 'required',
            'application_date' => 'required',
            'company_name' => 'required',
            // 'contact_name' => 'required',
            // 'phone' => 'required',
            // 'email' => 'required',
            // 'linkedin_name' => 'required',
            // 'Address' => 'required',
            'job_title' => 'required',
            'job_description' => 'required',
            'technologies' => 'required',
            // 'reference_number' => 'required',
            // 'salary' => 'required',
            // 'ending_date' => 'required',
            'source' => 'required',
            'fit_value' => 'required',
            'resume' => 'required',
            'cover_letter' => 'required',
            'transcript' => 'required',
            'reference_document' => 'required',
            'notes' => 'required',
        ]);

        Application::create($request->all());

        return redirect()->route('applications.index')
                        ->with('success', 'Application created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        return view('applications.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        return view('applications.edit', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        $request->validate([
            'status' => 'required',
            'application_date' => 'required',
            'company_name' => 'required',
            'contact_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'linkedin_name' => 'required',
            'Address' => 'required',
            'job_title' => 'required',
            'job_description' => 'required',
            'technologies' => 'required',
            'reference_number' => 'required',
            'salary' => 'required',
            'ending_date' => 'required',
            'source' => 'required',
            'fit_value' => 'required',
            'resume' => 'required',
            'cover_letter' => 'required',
            'transcript' => 'required',
            'reference_document' => 'required',
            'notes' => 'required',
        ]);

        $application->update($request->all());
        return redirect()->route('applications.index')
                        ->with('success', 'Application updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        $application->delete();

        return redirect()->route('applications.index')
                        ->with('success', 'Application deleted successfully');
    }
}
