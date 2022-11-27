<?php

class Inventory extends Controller{
    public function index(){
        $data['judul'] = 'Inventory';
        $data['inv'] = $this->model('Inventory_model')->getAllItem();
        $this->view('templates/header', $data);
        $this->view('inventory/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Inventory Details';
        $data['inv'] = $this->model('Inventory_model')->getItemById($id);
        $this->view('templates/header', $data);
        $this->view('inventory/detail', $data);
        $this->view('templates/footer');
    }

    public function insertData(){
        if($this->model('Inventory_model')->insertDataItem($_POST) > 0){
            Flasher::setFlash('Successfully', ' Added', 'success');
            header('Location: ' . BASEURL . '/inventory');
            exit;
        } else {
            Flasher::setFlash('Failed', ' to Add', 'danger');
            header('Location: ' . BASEURL . '/inventory');
            exit;
        }
    }
}