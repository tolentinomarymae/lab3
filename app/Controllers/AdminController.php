<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminController extends BaseController
{
   
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\MainModel();
    }
    public function admin()
    {
        return view('admin/index', ['products' => $this->product->findAll()]);
        return view('admin/index');
    }
    public function register(){
        helper(['form']);
        $data = [];
        return view ('register/register', $data);
    }
    public function authreg()
{
    helper(['form']);

    $rules = [
        'username' => 'required|min_length[8]|max_length[100]',
        'password' => 'required|min_length[8]|max_length[100]'
    ];

    if ($this->validate($rules)) {
        $adminModel = new AdminModel();

        $data = [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];

        dd($adminModel);

        dd($adminModel->save($data));

        return redirect()->to('/login');
    } else {
        $data['validation'] = $this->validator;

        return view('register/register', $data);
    }
}
    public function login(){
        helper(['form']);
        return view('login/index');
    }
    public function loginauth(){
        $session = session();
        $adminModel = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
    
    
        $data = $adminModel->where('username', $username)->first();
    
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
    
            if ($authenticatePassword){
                $ses_data = [
                    'id' =>$data['id'],
                    'username'=>$data['username'],
                    'isLoggedIn' => TRUE
                ];
    
                $session->set($ses_data);
    
                return redirect()->to('/admins');
            }else{
                $session->setFlashdata('msg', 'Username or Password is incorrect.');
    
                return redirect()->to('/login');
            }
        }
    }
    
}
