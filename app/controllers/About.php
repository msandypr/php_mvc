<?php

class About extends Controller{
    public function index($name = 'Muhammad Sandy Putra Riyadi', $age = 20, $work = 'Programmer'){
        $data['name'] = $name;
        $data['work'] = $work;
        $data['age'] = $age;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}