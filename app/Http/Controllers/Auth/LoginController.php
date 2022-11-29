<?php

namespace App\Http\Controllers\Auth;


//use Auth;
use App\Cms;
use App\Country;
use App\Helpers\Helper;
use App\User;
use Helmesvs\Notify\Facades\Notify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = '/';
    protected $authLayout = 'auth.';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('front.auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'status' => 'active',
            ])) {
            // Updated this line
            $loginAttempt = Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);
            if (Auth::user()->user_type == 'users') {
                smilify('success', 'Welcome to User Panel ⚡️');
                return redirect()->route('welcome');
            } else {
                Auth::logout();
                return redirect()->route('front.showLoginForm');
            }
        } else {
            return $this->sendFailedLoginResponse($request, 'auth.failed_status');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('front.home');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
