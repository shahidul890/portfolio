<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        $data['projects'] =  \App\Models\Project::all();
        return view('welcome')->with($data);
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
            "email"  =>  "required|email:filter",
            "message"  =>  "required|string",
        ]);

        try
        {
            $inputs = $request->except("_token");

            if($this->isValidEmail($request->email))
            {
                Mail::to("contact.shahidul@gmail.com")->send(new \App\Mail\ClientContactMail($inputs));

                return back()->with('success', "Your contact with me is greatly appreciated. I will respond to your email as soon as possible");
            }

            return back()->withInput()->withErrors([
                "email" => "Please enter valid email address."
            ]);

            return back()->withInput()->with("exception", "Please enter valid email address.");
        }
        catch(\Exception $e)
        {
            return back()->withInput()->with("exception", $e->getMessage());
        }
    }


    protected function isValidEmail($email)
    {
        $API_TOKEN = "d8c52869ae05581b4cf5edbc2efe2fdab3c0b178ff4639b6efe44575ca12";

        $api = Http::withoutVerifying()
        ->get("https://api.quickemailverification.com/v1/verify?email={$email}&apikey={$API_TOKEN}");

        $resp = $api->object();

        if($resp->result == "valid")
        {
            return true;
        }
        
        return false;
    }

}
