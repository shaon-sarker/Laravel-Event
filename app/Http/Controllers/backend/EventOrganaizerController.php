<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;



class EventOrganaizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event_pepoles = User::select(['id','name','email','role'])->where('role','event_org')->get();
        return view('eventjob.event_organaizer.index',compact('event_pepoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventjob.event_organaizer.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=> $request->role,
        ]);
        Alert::success('EventOrganizer Create Successfully');
        return redirect()->route('eventorganaizer.index');
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
        $event_mans = User::find($id);
        return view('eventjob.event_organaizer.edit',compact('event_mans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event_man = User::find($id);
        $event_man->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=> $request->role,
        ]);
        Alert::warning('EventOrganizer updated Successfully');
        return redirect()->route('eventorganaizer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event_man = User::find($id);
        $event_man->delete();
        Alert::error('EventOrganizer Deleted Successfully');
        return redirect()->route('eventorganaizer.index');
    }
}
