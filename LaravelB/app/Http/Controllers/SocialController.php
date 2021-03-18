<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;
class SocialController extends Controller
{
    public function checkUser($provider, Request $request) {
        if ($provider == 'twitter') {
            $getInfo = Socialite::driver($provider)->userFromTokenAndSecret($request->token,$request->scret);
        }else {
            $getInfo = Socialite::driver($provider)->stateless()->userFromToken($request->token);
        }
        return response()->json($getInfo);
    }
}
