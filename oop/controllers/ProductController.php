<?php
require ('model/Product.php');


class ProductController
{
public function show(){
    $allproducts=new Product();
    $products =  $allproducts->all();
    require 'views/products/show.view.php';
}


    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Logic to handle form submission (save product)
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'description' => $_POST['description'],
                'created_at' =>date("Y-m-d H:i:s")
            ];

            $productModel = new Product();
            $productModel->create($data);

            // Redirect to products list or success page after adding product
            header('Location: /products');
            exit();
        } else {
            // Logic to display the product creation form
            require 'views/products/create.view.php';
        }
    }

    public function delete($id){

        $productModel = new Product();
        $productModel->delete($id);
        header('Location: /products');
        exit();
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'description' => $_POST['description']
            ];

            $productModel = new Product();
            $productModel->update($id, $data);

            header('Location: /products');
            exit();
        }
    }

    public function showUpdateForm($id)
    {
        $productModel = new Product();
        $product = $productModel->find($id);

        if ($product) {
//            echo "Product found: " . htmlspecialchars($product['name']);
            require 'views/products/update.view.php';
        } else {
            echo "Product not found.";
            require 'views/pages/404.view.php';
        }
    }



}