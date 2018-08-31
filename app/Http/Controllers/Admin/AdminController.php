<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Helpers\Validate;
use App\User;

class AdminController extends Controller
{
   
    public function home(){
        return view('admin.home');
    }

     public function profile(){
        return view('admin.profile');
    }

  
}    