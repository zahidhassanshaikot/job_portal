<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function training(){
        return view('back-end.training');
    }
    public function singleTrainingPost(){
        return view('back-end.single-training-post');
    }
}
