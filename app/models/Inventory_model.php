<?php

class Inventory_model{

    private $dbh;
    private $stmt; //This is database handler

    public function __construct(){
        $dsn = 'mysql:host=localhost;dbname=php_mvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }

    }

    public function getAllItem(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM inventory');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    /*private $inv = [
        [
            "item_name" => "Indomie Goreng",
            "item_type" => "Instant Noodle",
            "quantity" => "69",
            "supplier" => "PT. Indofood Sukses Makmur"
        ],
        [
            "item_name" => "Indomie Kuah Soto",
            "item_type" => "Instant Noodle",
            "quantity" => "122",
            "supplier" => "PT. Indofood Sukses Makmur"
        ],
        [
            "item_name" => "Sedap Mie Kuah Kari Spesial",
            "item_type" => "Instant Noodle",
            "quantity" => "213",
            "supplier" => "PT. Wingsfood"
        ]
    ];*/
}