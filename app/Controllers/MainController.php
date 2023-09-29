<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\MainModel();
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
    
}
