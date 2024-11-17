<?php

class conn {



    public function connect() {
        try {
            $pdo = new PDO(
                "mysql:host=" . $_ENV['DB_SERVER'] . ";dbname=" . $_ENV['DB_DATABASE'],
                $_ENV['DB_USERNAME'],
                $_ENV['DB_PASSWORD']
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}







