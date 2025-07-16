<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MigrationController extends Controller
{
    public function __invoke(Request $request)
    {
        if(!$request->has('key') || $request->input('key') !== config('app.migration_key')) {
            abort(404);
        }

        // Run migrations
        Artisan::call('migrate', ['--force' => true]);
        return "Migration completed successfully.";
    }
}
