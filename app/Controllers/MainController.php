<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;

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
    public function admin()
    {
        return view('admin/index', ['products' => $this->product->findAll()]);
       return view ('admin/index');
    }
   /* public function show($id)
{
    $product = MainModel::find($id);

    return view('products.show', [
        'product' => $product,
    ]);
}*/
/*
    public function login()
{
    $session = session();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
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
    }*/
    public function showDataTable()
{
    $data = [
        'products' => $this->product->findAll(), 
    ];
    
    return view('data_table', $data); 
}
public function store()
{
    // Validate the form data
    $validation = $this->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'image' => 'uploaded[image]|max_size[image,1024]',
        'category' => 'required',
        'quantity' => 'required|numeric',
    ]);

    if (!$validation) {
        
        return view('admin/index', ['products' => $this->product->findAll()]);
        return view('admin/index', [
            'errors' => $this->validator->getErrors(),
        ]);
    }

    $model = new MainModel();
    $model->insert([
        'name' => $this->request->getPost('name'),
        'description' => $this->request->getPost('description'),
        'price' => $this->request->getPost('price'),
        'image' => $this->request->getFile('image')->store('uploads'),
        'category' => $this->request->getPost('category'),
        'quantity' => $this->request->getPost('quantity'),
    ]);

    return redirect()->to('/admins');
}
}