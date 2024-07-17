<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function OnlyLogin()
   {
    return view('onlylogin');
   }
   public function CreateAc()
   {
    return view('createaccount');
   }
}
