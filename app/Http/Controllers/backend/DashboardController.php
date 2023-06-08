<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Catering;
use App\Models\CreativePanel;
use App\Models\Decoration;
use App\Models\JobPortal;
use App\Models\Service;
use App\Models\User;
use App\Models\Vanue;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_caterings = Catering::count();
        $total_creative_panels = CreativePanel::count();
        $total_decorations = Decoration::count();
        $total_jobportals = JobPortal::count();
        $total_services = Service::count();
        $total_vanues = Vanue::count();
        $total_customers = User::where('role','customer')->count();
        $total_eventorganizers = User::where('role','event_org')->count();
        return view('dashboard',compact('total_caterings','total_creative_panels','total_decorations','total_jobportals','total_services','total_vanues','total_customers','total_eventorganizers'));
    }
}
