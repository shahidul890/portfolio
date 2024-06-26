<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'new_password' => 'string|min:6',
            'confirm_new_password' => 'string|min:6|same:new_password',
        ]);

        try {
            DB::table('users')->where('email', $request->email)
            ->update([
                'password' => bcrypt($request->new_password)
            ]);

            $user = DB::table('users')->where('email', $request->email)->first();
            Auth::loginUsingId($user->id);
            return redirect($this->redirectTo);

        } catch (\Throwable $th) {
            return back()->withErrors(['email' => $th->getMessage()]);
        }
    }

}
