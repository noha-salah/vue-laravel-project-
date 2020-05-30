<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class SocialAccountController extends Controller
{
    //



public function redirectToProvider($provider){





    return Socialite :: driver($provider)->redirect();
}

}