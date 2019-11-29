<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    protected function authenticated(Request $request, $user)
    {
        if($user->hasRole('Admin')) { 
            return redirect(session('link'));
        //   return redirect('/'); 
        
        } else if ($user->hasRole('User')){
            return redirect(session('link'));
            // return redirect('/');
        }else{
            $request->session()->invalidate();
            return redirect('/login');
        }
    }


    use AuthenticatesUsers;

    public function showLoginForm()
    {
        if (!session()->has('link')) {
            session(['link' => url()->previous()]);
        }
        return view('auth.login');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }
}
