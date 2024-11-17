<?php
//////////////$product=$_GET['id'] ////////to be able to get the id
require ('model/Product.php');



$allproducts=new Product();
$products =  $allproducts->all();

//////can filter the products here
require  'views/products/show.view.php';