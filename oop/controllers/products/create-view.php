<?php


require_once("../../model/Product.php");

$data = [
    'product_name' => $_POST['name'],
    'product_price' => $_POST['price'],
    'product_description' => $_POST['description']
];

 $products=new Product();
 $products->create($data);