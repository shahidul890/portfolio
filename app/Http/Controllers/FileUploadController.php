<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'file' => 'required|file'
        ]);

        try 
        {
            $fileName = $request->file('file')->hashName();
            $request->file('file')->move(public_path('uploads/files'), $fileName);
            return response()->json([
                'message' => 'Uploaded successfully',
                'code' => 200,
                'link' => url('/').'/uploads/files/'.$fileName
            ]);
        }
        catch (\Throwable $th) 
        {
            return response()->json([
                'message' => $th->getMessage(),
                'code' => 400,
            ]);
        }
    }
}
