<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
        $projects =  \App\Models\ProjectCollection::all();
        $skills =  \App\Models\SkillCollection::all();
        $data['basicInfo'] = \App\Models\BasicInfo::all();

        $data['projects'] = Arr::where($projects, function(array $value, string $key){
            return $value['active'] == true;
        });

        $data['skills'] = Arr::where($skills, function(array $value, string $key){
            return $value['active'] == true;
        });

        $data['blogs'] = Blog::whereIsActive(true)->latest()->take(3)->get();
        
        return view('welcome')->with($data);
        // return inertia('Frontend/Welcome', $data);
    }

    /**
     * -----------------------------------------------------------
     * Show Projects Page
     * -----------------------------------------------------------
     * 
     * 
     */
    public function projects()
    {
        $projects =  \App\Models\ProjectCollection::all();
        $data['projects'] = Arr::where($projects, function(array $value, string $key){
            return $value['active'] == true;
        });
        return view('projects')->with($data);
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
