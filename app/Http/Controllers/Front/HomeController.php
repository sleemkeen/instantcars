<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Helpers\Validate;
use App\User;

class HomeController extends Controller
{
    private $auth;
    private $validate;


    public function __construct(JWTAuth $auth, Validate $validate) {
        $this->auth = $auth;
        $this->validate = $validate;
    }

    

}    