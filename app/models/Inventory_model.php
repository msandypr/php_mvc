<?php

class Inventory_model{
    private $table = 'inventory';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllItem(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getItemById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
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