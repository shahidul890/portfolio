<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetLinkMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    public function __invoke()
    {
        $user = DB::table('users')->first();
        $token = str()->random(50);
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $user->email],
            ['token' => $token,'created_at' => now()]
        );
        $url = url('/cp/password/reset/verify?email='.$user->email.'&token='.$token);
        Mail::to($user->email)->send(new PasswordResetLinkMail($user->name,$url));
        return back()->with('message', 'We have sent a password reset link to your email address ('.$user->email.'). Token expired in 5 minutes.');
    }

}
