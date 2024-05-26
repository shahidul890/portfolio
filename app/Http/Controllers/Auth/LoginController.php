<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\LoginNotificationMail;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('handleLogout');
    }


    /**
     * Show Login Form
     */
    public function showLoginForm()
    {
        return inertia()->render('Auth/Login');
    }


    /**
     * Handle Login Request
     */
    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required|min:6'
        ]);

        try 
        {
            if(Auth::attempt($request->only('email', 'password')))
            {
                $user = auth()->user();
                $loginDetails = [
                    'name' => $user->name,
                    'time' => now()->toDateTimeString(),
                    'ip' => $request->ip(),
                    'device' => $request->header('User-Agent'),
                ];
                Mail::to($user->email)->send(new LoginNotificationMail($loginDetails));
                return redirect($this->redirectTo);
            }
            else
            {
                return back()->withErrors([
                    'email' => 'The credential does not matched our records'
                ]);
            }
        } 
        catch (\Throwable $th) 
        {
            return back()->withErrors([
                'email' => $th->getMessage()
            ]);
        }
    }

    public function handleLogout()
    {
        Auth::logout();
        return back();
    }
}
