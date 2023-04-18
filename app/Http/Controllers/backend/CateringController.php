<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CateringStoreRequest;
use App\Http\Requests\CateringUpdateRequest;
use App\Models\Catering;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
// use Illuminate\Support\SweetAlert\Facades\Alert;

class CateringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catering_info = Catering::select(['id','catering_name','phone_no','address','status'])->get();
        return view('eventjob.catering.index',compact('catering_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventjob.catering.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CateringStoreRequest $request)
    {
        // dd($request->all());
        Catering::insert([
            'user_id'=>Auth::id(),
            'catering_name'=>$request->catering_name,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'created_at'=>Carbon::now()
        ]);
        Alert::success('Catering Added Successfully');
        return redirect()->route('catering.index');

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
        $catering = Catering::find($id);
        return view('eventjob.catering.edit',compact('catering'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $catering = Catering::find($id);
        $catering->update([
            'user_id'=>Auth::id(),
            'catering_name'=>$request->catering_name,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
            'status'=>$request->status,
            'updated_at'=>Carbon::now()
        ]);

        Alert::warning('Catering Updated Successfully');
        return redirect()->route('catering.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catering = Catering::find($id);
        $catering->delete();
        Alert::success('Catering Deleted Successfully');
        return redirect()->route('catering.index');
    }
}
