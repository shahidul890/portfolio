<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MigrationController extends Controller
{
    public function __invoke(Request $request)
    {
        Artisan::call('storage:link');
        dd('Storage link created successfully.');
    }
}
