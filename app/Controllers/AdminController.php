<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminController extends BaseController
{
    
    
    public function admin()
    {
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
        'username' => 'required|min_length[1]|max_length[100]',
        'password' => 'required|min_length[1]|max_length[100]'
    ];

    if ($this->validate($rules)) {
        $adminModel = new AdminModel();

        $data = [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];

        // Add this line to debug the $adminModel object
        dd($adminModel);

        // Add this line to debug the save() method
        dd($adminModel->save($data));

        return redirect()->to('/login');
    } else {
        $data['validation'] = $this->validator;

        return view('register/register', $data);
    }
}
    
    
}
