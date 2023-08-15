<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
   public function authenticated(){
        if (Auth::user()->usertype== 'admin') {
            return redirect('/admin/dashboard')->
         with('status', 'Welcome to Admin Dashboard');
        }
        elseif (Auth::user()->usertype== 'user'){
            return redirect('/home')->
         with('status', 'Logged in succesfully');
        }        
    }

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
