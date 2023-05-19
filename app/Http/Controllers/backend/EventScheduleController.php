<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\EventSchedule;
use App\Models\Service;
use App\Models\Vanue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class EventScheduleController extends Controller
{

    public function index()
    {
        $event_schule_list = EventSchedule::all();
        return view('eventjob.eventschule.index',compact('event_schule_list'));
    }

    public function create()
    {
        $vanue_name = Vanue::select(['id','vanue_name'])->get();
        $service_name = Service::select(['id','service_price'])->get();
        // dd($service_name);
        return view('eventjob.eventschule.create',compact('vanue_name','service_name'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        EventSchedule::insert([
            'user_id'=>Auth::id(),
            'vanue_id'=>$request->vanue_id,
            'service_id'=>$request->service_id,
            'event_schedule_time'=>$request->event_schedule_time,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'created_at'=>Carbon::now()
        ]);
        Alert::success('EventSchule Create Successfully');
        // return redirect()->route('vanue.index');
        return back();
    }
}
