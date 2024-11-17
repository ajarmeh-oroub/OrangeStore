<?php
require_once ('Model.php');
class Product extends Model
{
    public function  __construct(){
        parent::__construct("product"); ///////////to establesh the db connection form the parent
    }
}