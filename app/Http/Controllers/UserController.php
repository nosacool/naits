<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    //
    public function insertUsers(Request $request){
        $user = new User($request->all());
        return $this->sendResponse($user,'Success');
    }
}
