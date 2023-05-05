<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Models\Service;
use App\Models\Vanue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services_list = Service::select(['id','vanue_id','service_price','service_list_name','service_type'])->get();
        $vanue_list = Vanue::select(['id','vanue_name'])->get();
        return view('eventjob.services.index',compact('services_list','vanue_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vanue_list = Vanue::select(['id','vanue_name'])->get();
        return view('eventjob.services.create',compact('vanue_list'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceStoreRequest $request)
    {
        // dd($request->all());
        Service::insert([
            'user_id'=>Auth::id(),
            'vanue_id'=>$request->vanue_id,
            'service_list_name'=>$request->service_list_name,
            'service_price'=>$request->service_price,
            'service_type'=>$request->service_type,
            'created_at'=>Carbon::now()
        ]);
        Alert::success('Services Added Successfully');
        // return back();
        return redirect()->route('service.index');
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
        $service = Service::find($id);
        $vanue_list = Vanue::select(['id','vanue_name'])->get();
        return view('eventjob.services.edit',compact('service','vanue_list'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $services = Service::find($id);
        $services->update([
            'user_id'=>Auth::id(),
            'vanue_id'=>$request->vanue_id,
            'service_list_name'=>$request->service_list_name,
            'service_price'=>$request->service_price,
            'service_type'=>$request->service_type,
            'updated_at'=>Carbon::now()
        ]);

        Alert::warning('Services Updated Successfully');
        return redirect()->route('service.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service_destroy = Service::find($id);
        $service_destroy->delete();
        Alert::error('Services Deleted Successfully');
        return redirect()->route('service.index');
    }
}
