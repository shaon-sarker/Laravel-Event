<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Vanue;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function vanuelist()
    {
        $vanues = Vanue::select(['id','vanue_name'])->get();
        return view('eventjob.services.vanuelist',compact('vanues'));
    }

    public function servicelist(Request $request)
    {
        // dd($request->vanue_id);
        $search = $request['search'] ?? "";
        if($search != "")
        {
            $service_list = Service::where('service_type','=',$search)->get();
            // dd($service_list);
            return view('eventjob.services.servicelist',compact('service_list'));
        }
        else{
            dd('No result');
        }

    }
}
