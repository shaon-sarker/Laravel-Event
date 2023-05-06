<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobPoratlStoreRequest;
use App\Http\Requests\JobPortalStoreRequest;
use App\Models\JobPortal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class JobPortalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job_list = JobPortal::select(['id','user_id','job_title','job_description','salary_range','created_at'])->get();
        return view('eventjob.jobportal.index',compact('job_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventjob.jobportal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobPortalStoreRequest $request)
    {
        $jobposts = new JobPortal;
        $jobposts->user_id = Auth::id();
        $jobposts->job_title = $request->input('job_title');
        $jobposts->job_description = $request->input('job_description');
        $jobposts->salary_range = $request->input('salary_range');
        $jobposts->created_at = Carbon::now();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/jobpost/',$filename);
            $jobposts->image = $filename;
        }
        $jobposts->save();
        Alert::success('Jobpost Added Successfully');
        // return back();
        return redirect()->route('jobportal.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job_portal = JobPortal::find($id);
        return view('eventjob.jobportal.edit',compact('job_portal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jobpost = JobPortal::find($id);
        $jobpost->user_id = Auth::id();
        $jobpost->job_title = $request->input('job_title');
        $jobpost->job_description = $request->input('job_description');
        $jobpost->salary_range = $request->input('salary_range');
        $jobpost->created_at = Carbon::now();
        if($request->hasFile('image'))
        {
            $destination = 'uploads/jobpost/'.$jobpost->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/jobpost/',$filename);
            $jobpost->image = $filename;
        }
        $jobpost->update();
        Alert::warning('Jobpost Updated Successfully');
        return redirect()->route('jobportal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jobpost = JobPortal::find($id);
        $jobpost->delete();
        Alert::error('Jobpost Deleted Successfully');
        return redirect()->route('jobportal.index');

    }
}
