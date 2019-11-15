<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobs(){
        return view('back-end.jobs');
    }
    public function myJobs(){
        return view('back-end.my-job');
    }
    public function postJob(){
        return view('back-end.post-job');
    }
    public function singleJobPost(){
        return view('back-end.single-job-post');
    }
    public function postJobList(){
        return view('back-end.post-job-list');
    }
    public function candidateList(){
        return view('back-end.candidate-list');
    }
    public function candidateStatus($status){
        return view('back-end.candidate-status');
    }
}
