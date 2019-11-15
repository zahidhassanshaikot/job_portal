<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function employer(){
        return view('back-end.employer');
    }
}
