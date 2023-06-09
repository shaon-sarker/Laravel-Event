<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function index()
    {
        return view('eventjob.sms.create');
    }
    public function show()
    {
        return view('eventjob.sms.index');
    }
}
