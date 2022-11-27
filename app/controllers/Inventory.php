<?php

class Inventory extends Controller{
    public function index(){
        $data['judul'] = 'Inventory';
        $data['inv'] = $this->model('Inventory_model')->getAllItem();
        $this->view('templates/header', $data);
        $this->view('inventory/index', $data);
        $this->view('templates/footer');
    }
}