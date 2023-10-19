<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    /**
     * -----------------------------------------------------------
     *  Show Welcome Page
     * -----------------------------------------------------------
     * 
     * @author Shahidul Islam <contact.shahidul@gmail.com>
     * @creator Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified September 19, 2023
     */
    public function welcome()
    {
        return view('welcome');
    }


    /**
     * -----------------------------------------------------------
     *  Show About Page
     * -----------------------------------------------------------
     * 
     * @author Shahidul Islam <contact.shahidul@gmail.com>
     * @creator Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified September 19, 2023
     */
    public function about()
    {
        return view('about');
    }


    /**
     * -----------------------------------------------------------
     *  Show Contact Page
     * -----------------------------------------------------------
     * 
     * @author Shahidul Islam <contact.shahidul@gmail.com>
     * @creator Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified September 19, 2023
     */
    public function contact()
    {
        return view('contact');
    }


    /**
     * -----------------------------------------------------------
     *  Handle the contact form
     * -----------------------------------------------------------
     * 
     * @author Shahidul Islam <contact.shahidul@gmail.com>
     * @creator Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified September 19, 2023
     */
    public function storeContact(Request $request)
    {
        $request->validate([
            "first_name"  =>  "required",
            "last_name"  =>  "required",
            "email"  =>  "required|email",
            "message"  =>  "required|string",
        ]);

        try
        {
            $inputs = $request->except("_token");

            Mail::to("contact.shahidul@gmail.com")->send(new \App\Mail\ClientContactMail($inputs));

            return back()->with('success', "Your contact with me is greatly appreciated. I will respond to your email as soon as possible");
        }
        catch(\Exception $e)
        {
            return back()->with("exception", $e->getMessage());
        }
    }

}
