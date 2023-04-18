<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreativePanelStoreRequest;
use App\Models\CreativePanel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class CreativePanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $creativepanel_info = CreativePanel::select(['id','creativepanel_name','phone_no','address','panel_type'])->get();
        return view('eventjob.creativepanel.index',compact('creativepanel_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventjob.creativepanel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreativePanelStoreRequest $request)
    {
        // dd($request->all());
        CreativePanel::insert([
            'user_id'=>Auth::id(),
            'creativepanel_name'=>$request->creativepanel_name,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'panel_type'=>$request->panel_type,
            'created_at'=>Carbon::now()
        ]);
        Alert::success('CreativePanel Added Successfully');
        return redirect()->route('creativepanel.index');
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
        $creativepanel = CreativePanel::find($id);
        return view('eventjob.creativepanel.edit',compact('creativepanel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $creativepanel = CreativePanel::find($id);
        $creativepanel->update([
            'user_id'=>Auth::id(),
            'creativepanel_name'=>$request->creativepanel_name,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'panel_type'=>$request->panel_type,
            'updated_at'=>Carbon::now()
        ]);

        Alert::warning('CreativePanel Updated Successfully');
        return redirect()->route('creativepanel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $creativepanel = CreativePanel::find($id);
        $creativepanel->delete();
        Alert::error('CreativePanel Deleted Successfully');
        return redirect()->route('creativepanel.index');
    }
}
