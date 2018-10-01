<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helper\Validate;
use App\Http\Helper\General;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
   public function profile(){
    return view('user.profile');
   }

   public function changepassword(){
    return view('user.changepassword');
   }

    public function mycars(){
    return view('user.mycars');
   }
    

}    