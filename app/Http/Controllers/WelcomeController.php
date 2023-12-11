<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

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
        $projects =  \App\Models\Project::all();
        $skills =  \App\Models\Skill::all();

        $data['projects'] = Arr::where($projects, function(array $value, string $key){
            return $value['active'] == true;
        });

        $data['skills'] = Arr::where($skills, function(array $value, string $key){
            return $value['active'] == true;
        });
        
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
        // return view('about');
    }

}
