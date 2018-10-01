<?php


namespace App\Http\Helper;
use App\User;
use Validator;

class Validate  {
    private $validator;
    private $user;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function validateuser($data)
    {
       $datavalidate =  $this->validator::make($data, [
                 "phone" => "required",
                "email" => "required|email|unique:users",
                "password" => "required|min:6|confirmed",
                "username" => "required|unique:users",
                "category" => "required",

            ]);

        return $datavalidate;


    }

    public function authuser($data){

        $authdata = $this->validator::make($data, [
                "username" => "required",
                "password" => "required|min:6",


            ]);

        return $authdata;
    }
    
}    