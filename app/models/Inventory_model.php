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

    public function insertDataItem($data){
        $query = "INSERT INTO inventory
                    VALUES
                    ('', :item_name, :item_type, :quantity, :supplier)";
        $this->db->query($query);
        $this->db->bind('item_name', $data['item_name']);
        $this->db->bind('item_type', $data['item_type']);
        $this->db->bind('quantity', $data['quantity']);
        $this->db->bind('supplier', $data['supplier']);

        $this->db->execute();

        return $this->db->rowCount();

        //return 0; uncomment this for testing failed flash message
        //and commenting line 23 - 34
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