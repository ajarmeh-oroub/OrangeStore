<?php




class CreateProductsTable {
    public function up() {
        return "CREATE TABLE `product` (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        price INT NOT NULL,
        description VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";


    }

    public function down(){
        $sql= "DROP TABLE IF EXISTS `product`";
        return ($sql);
    }

}