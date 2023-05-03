<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\VanueStoreRequest;
use App\Models\Vanue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class VanueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vanue_info = Vanue::select(['id','vanue_name','location','address','vanue_type'])->get();
        return view('eventjob.vanue.index',compact('vanue_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventjob.vanue.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VanueStoreRequest $request)
    {
        // dd($request->all());
        Vanue::insert([
            'user_id'=>Auth::id(),
            'vanue_name'=>$request->vanue_name,
            'location'=>$request->location,
            'address'=>$request->address,
            'vanue_type'=>$request->vanue_type,
            'created_at'=>Carbon::now()
        ]);
        Alert::success('Vanue Added Successfully');
        return redirect()->route('vanue.index');
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
        $vanue = Vanue::find($id);
        return view('eventjob.vanue.edit',compact('vanue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vanue_update = Vanue::find($id);
        $vanue_update->update([
            'user_id'=>Auth::id(),
            'vanue_name'=>$request->vanue_name,
            'location'=>$request->location,
            'address'=>$request->address,
            'vanue_type'=>$request->vanue_type,
            'updated_at'=>Carbon::now()
        ]);

        Alert::warning('Vanue Updated Successfully');
        return redirect()->route('vanue.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vanue_destroy = Vanue::find($id);
        $vanue_destroy->delete();
        Alert::error('Vanue Deleted Successfully');
        return redirect()->route('vanue.index');
    }
}
