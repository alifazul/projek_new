<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Magang;
use App\Models\Profil;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        return redirect()->route('login');
    }
    
    public function authenticated(Request $request, $user){
        if($user->HasRole('admin')){
            return redirect()->route('admin.index');
        }else if($user->HasRole('pengunjung')){
            return redirect()->route('home');
        }
        
    }
    protected function redirectTo(Request $request)
    {
        if ( $request->user()->hasAnyRole(['admin']) ) {
            return route('admin.dashboard');
        } else if( $request->user()->hasAnyRole(['pengunjung']) ) {
            return route('homeprofil');
        }

        return '/home';
    }
}
