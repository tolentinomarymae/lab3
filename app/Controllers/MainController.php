<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    private $product;
    private $user;
    public function __construct()
    {
        $this->product = new \App\Models\MainModel();
        $this->user = new \App\Models\UserModel();
    }
    public function index()
    {
        $data = [
            'products' => $this -> product->findAll()
        ];
        return view ('index', $data);
    }
    public function shop(){
        $data = [
            'products' => $this -> product->findAll()
        ];
        return view ('products', $data);
    }
    
    public function login()
{
    $session = session();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        // Query the database to check if the username and password match
        $check = $this->user->where('username', $username)->where('password', $password)->first();
        
        if ($check) {
            $data = [
                'username' => $check['username'],
                'isloggedin' => TRUE
            ];
            
            $session->set($data);
            return view('admin/index', ['products' => $this->product->findAll()]);

        } else {
            return view('login/index', ['error' => 'Invalid username or password']);
        }
    } else {
        return view('login/index');
    }
}

    public function register()
    {
        return view('register/register');
    }
    

}