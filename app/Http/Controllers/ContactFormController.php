<?php

namespace App\Http\Controllers;

use App\Events\ContactForm;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    use HttpResponse;


    /**
     * -----------------------------------------------------------
     *  Show Contact Page
     * -----------------------------------------------------------
     * 
     * @author Shahidul Islam <contact.shahidul@gmail.com>
     * @creator Shahidul Islam <contact.shahidul@gmail.com>
     * @last_modified 23-11-2023
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
     * @last_modified 23-11-2023
     */
    public function storeContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "first_name"  =>  "required",
            "last_name"  =>  "required",
            "email"  =>  "required|email:filter",
            "message"  =>  "required|string",
        ]);

        if($validator->fails())
        {
            return $this->sendError("Validation Error", $validator->errors()->toArray());
        }

        try
        {
            $inputs = $request->except("_token");
            $inputs["ip"] = $request->ip();

            event(new ContactForm($inputs));

            return $this->sendSuccess("Your contact with me is greatly appreciated. I will respond to your email as soon as possible");
        }
        catch(\Exception $e)
        {
            return $this->sendError($e->getMessage());
        }
    }


    protected function emailValidity(Request $request)
    {
        $API_TOKEN = "d8c52869ae05581b4cf5edbc2efe2fdab3c0b178ff4639b6efe44575ca12";
        $email = $request->email;

        $api = Http::withoutVerifying()
        ->get("https://api.quickemailverification.com/v1/verify?email={$email}&apikey={$API_TOKEN}");

        $resp = $api->object();

        if($resp->result == "valid")
        {
            return $this->sendSuccess("valid");
        }
        
        return $this->sendError("invalid");
    }
}
