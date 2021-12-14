<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function sendResponse($result, $message)
    {
    	$response = [
            'status' => '00',
            'message' => $message,


        ];
        if(!empty($result)){
            $response['data'] = $result;
        }


        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error,$status = "01", $errorMessages = [], $code = 401)
    {
    	$response = [
            'status' => $status,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
    
}
