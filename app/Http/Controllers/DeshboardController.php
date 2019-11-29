<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Role;
use App\User;
use DB;
use File;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;




class DeshboardController extends Controller
{
    public function index(){
        return view('back-end.home');
    }
    public function userLogin(){
        if (!session()->has('link')) {
            session(['link' => url()->previous()]);
        }
        return view('back-end.login');
    }
    public function userReg(){
        return view('back-end.registration');
    }
    public function saveUserInfo(Request $request){
        $this->validate($request, [
            'fname' => 'required|max:30|min:2',
            'lname' => 'required|max:30|min:2',
            'email' => 'email|unique:users,email|required',
            
            'password' => ['required',
                'min:6'],
        ]);

            $user = new User();
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->phone_no = $request->phone_no;
            $user->password = Hash::make($request->password);
            $user->save();
            $user->attachRole(Role::where('name', $request->type)->first());
            Auth::login($user);
            

            return redirect('/');


            // return redirect()->route('user-login');
    }
}
