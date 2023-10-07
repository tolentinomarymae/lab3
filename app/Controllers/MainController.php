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
   
 
    public function showDataTable()
{
    $data = [
        'products' => $this->product->findAll(), 
    ];
    
    return view('data_table', $data); 
}
public function add()
{
    // Load the form view
    return view('product/add');
}public function store()
{
    // Create a new instance of your model
  $model = new MainModel();

    // Validate the form data
    $validation = $this->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'category' => 'required',
        'quantity' => 'required|numeric',
    ]);

    if (!$validation) {
        // Validation failed, return to the form with errors
        return view('product/add', ['validation' => $this->validator]);
    }

    // If validation passes, insert the data into the database
    $model->save([
        'name' => $this->request->getPost('name'),
        'description' => $this->request->getPost('description'),
        'price' => $this->request->getPost('price'),
        'category' => $this->request->getPost('category'),
        'quantity' => $this->request->getPost('quantity'),
    ]);

    // Redirect to a success page or display a success message
    return redirect()->to('/admins')->with('success', 'Product added successfully');
}


public function edit($id)
{
    // Load the product to be edited from the database
    $model = new MainModel();
    $product = $model->find($id);

    // Load the edit view with the product data
    return view('edit_product', ['product' => $product]);
}
public function update()
{
    // Handle the form submission to update the product
    $model = new MainModel();

    // Retrieve the product_id from the form input
    $product_id = $this->request->getPost('product_id');

    // Define the data to be updated
    $dataToUpdate = [
        'name' => $this->request->getPost('name'),
        'description' => $this->request->getPost('description'),
        'price' => $this->request->getPost('price'),
        'category' => $this->request->getPost('category'),
        'quantity' => $this->request->getPost('quantity'),
    ];

    // Update the product in the database using the update() method
    $model->update($product_id, $dataToUpdate);

    // Redirect back to the product list or a success page
    return redirect()->to('/admins')->with('success', 'Product updated successfully');
}
public function deleteProduct($id)
{
    // Load the model
    $model = new MainModel();

    // Check if the product with the given ID exists
    $product = $model->find($id);

    if ($product) {
        // Delete the product from the database
        $model->delete($id);

        // Redirect back to the product list with a success message
        return redirect()->to('/admins')->with('success', 'Product deleted successfully');
    } else {
        // Redirect back to the product list with an error message if the product doesn't exist
        return redirect()->to('/admins')->with('error', 'Product not found');
    }
}


}

