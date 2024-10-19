<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email'
        ]);

        $row = DB::table('password_reset_tokens')->where('email', $request->email)->where('token', $request->token)->first();

        if($row)
        {
            $token_expired_at = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$row->created_at)->addMinutes(10);
            $now = now();

            if(strtotime($token_expired_at) > strtotime($now)) 
            {
                DB::table('password_reset_tokens')->where('email', $row->email)->delete();
                $data = $request->only('email');
                return back()->with(compact('data'));
            }
            else
            {
                return back()->with('exception', 'Token expired');
            }
        }
        else{
            return back()->with('exception', 'Invalid Token');
        }
    }
}
