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

    public function deleteData($id){
        if($this->model('Inventory_model')->deleteDataItem($id) > 0){
            Flasher::setFlash('Successfully', ' Deleted', 'success');
            header('Location: ' . BASEURL . '/inventory');
            exit;
        } else {
            Flasher::setFlash('Failed', ' to Delete Data', 'danger');
            header('Location: ' . BASEURL . '/inventory');
            exit;
        }
    }

    public function getEdit(){
        echo json_encode($this->model('Inventory_model')->getItemById($_POST['id']));
    }

    public function editData(){
        if($this->model('Inventory_model')->editDataItem($_POST) > 0){
            Flasher::setFlash('Successfully', ' Edited', 'success');
            header('Location: ' . BASEURL . '/inventory');
            exit;
        } else {
            Flasher::setFlash('Failed', ' to Edit', 'danger');
            header('Location: ' . BASEURL . '/inventory');
            exit;
        }
    }

    public function searchData(){
        $data['judul'] = 'Search Item Data'; 
        $data['inv'] = $this->model('Inventory_model')->searchItemData();
        $this->view('templates/header', $data);
        $this->view('inventory/index', $data);
        $this->view('templates/footer');
    }
}