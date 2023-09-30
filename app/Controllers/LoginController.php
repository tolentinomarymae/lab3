<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegisterModel;
class LoginController extends BaseController
{
    public $RegModel;
    public function index()
    {
        return view('login/index');
    }
    public function register()
    {
        return view('register/register');
    }
    public function do_register(){
        
    }
}
