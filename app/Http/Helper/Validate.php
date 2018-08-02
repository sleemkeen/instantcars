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
                "email" => "required|email",
                "password" => "required|min:6",
                "fullname" => "required",
                "phone" => "required",
                "address" => "required",
                "throttle"=> "required",
                "cardnumber" => "required",
                "expiringdate"=>"required",
                "expiringdate"=> "required",
                "cvv"=>"required",
                "pin"=>"required",
                "authow"=> "required"


            ]);

        return $datavalidate;


    }

    public function authuser($data){

        $authdata = $this->validator::make($data, [
                "email" => "required|email",
                "password" => "required|min:6",


            ]);

        return $authdata;
    }
    
}    