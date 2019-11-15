<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobs(Request $request){
        return view('back-end.jobs');
    }
    public function myJobs(Request $request){
        return view('back-end.my-job');
    }
}
