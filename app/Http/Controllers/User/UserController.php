<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helper\Validate;
use App\Http\Helper\General;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\DB;
use JWTAuth;
use Crypt;


use App\User;
use App\Post;
use App\Link;

class UserController extends Controller
{
    private $auth;
    private $validate;
    private $user;
    private $general;


    public function __construct(JWTAuth $auth, Validate $validate, User $user, General $general) {
        $this->auth = $auth;
        $this->validate = $validate;
        $this->user = $user;
        $this->general = $general;
    }

    public function Register(Request $request) {
        try {
            $body = $request->all();
                //validate request body
            $validation = $this->validate->validateuser($body);
            if($validation->fails())
            {
                $errorMessages = $validation->getMessageBag()->messages();
              
                return response()->json(["error" => $errorMessages]);
            } else {
                $this->user->create($body);
                return response()->json(["success" => "User successfully created"], 200);
            }
        } catch(\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }




    public function Delete(Request $request) {

      try{

         $justdelete = $this->general->delete('users', '7');

         
      }catch(\Exception $e){
            return response()->json(["message" => $e->getMessage(),500]);
        }

    }


    public function getusers(){
        try{
            $users = User::get();
            return $users;
        }catch(\Exception $e){
            return response()->json(["message" => $e->getMessage(),500]);
        }
    }

   

    

}    