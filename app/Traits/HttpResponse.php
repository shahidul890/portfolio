<?php

namespace App\Traits;

use Illuminate\Support\Facades\Request;

trait HttpResponse
{
    /**
     * --------------------------------------------------------
     *  Send success message
     * --------------------------------------------------------
     * @param string $message
     * @param array|object $data
     * @param int $code
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @contributor Shahidul Islam <contact.shahidul@gmail.com>
     * @created_at 23-11-2023
     */
    protected function sendSuccess(string $message, array|object $data = [], int $code = 200, $authUser = true)
    {

        $response = [
            "success"   => true,
            "status"    =>  "API called successfully",
            "status_code"   =>  $code,
            'message'   =>  $message,
            'api'   =>  [
                'endpoint'   =>  Request::url(),
                'method'   =>  Request::method(),
            ],
        ];

        if (auth()->check() && $authUser == true) {
            $response['auth_user'] = auth()->user();
        }

        $response["data"] = $data;

        return response()->json($response, $code);
    }


    /**
     * --------------------------------------------------------------
     *  send Error response
     * --------------------------------------------------------------
     * 
     * @param string $message
     * @param array|object $data
     * @param int $code
     * 
     * @return \Illuminate\Http\JsonResponse
     * 
     * @contributor Shahidul Islam <contact.shahidul@gmail.com>
     * @created_at 23-11-2023
     */
    protected function sendError(string $message, array|object $data = [], int $code = 400, $authUser = true)
    {
        $response = [
            "success"   => false,
            "status"    =>  "API called successfully",
            "status_code"   =>  $code,
            'message'   =>  $message,
            'api'   =>  [
                'endpoint'   =>  Request::url(),
                'method'   =>  Request::method(),
            ]
        ];

        if (auth()->check() && $authUser == true) {
            $response['auth_user'] = auth()->user();
        }

        $response['data'] = $data;

        return response()->json($response, $code);
    }
}
