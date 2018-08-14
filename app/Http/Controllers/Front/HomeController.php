<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Helpers\Validate;
use App\User;

class HomeController extends Controller
{
   
    public function index(){
        return view('page.index');
    }

    public function contact(){
        return view('page.contact');

    }

    public function about(){
        return view('page.about');
    }

    public function work(){
        return view('page.work');
    }
    public function faq(){
        return view('page.faq');
    }
    public function privacy(){
      return view('page.privacy');
  }

  public function login(){
      return view('page.login');
  }
  public function register(){
      return view('page.register');
  }

  public function listacar(){
      return view('page.submitcar');
  }

  public function deals(){
      return view('page.deals');
  }

  public function detail(){
    return view('page.detail');
  }

  

}    