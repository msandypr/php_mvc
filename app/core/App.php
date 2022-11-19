<?php

class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->parseURL();

        //Controller          Harus di Isset, karena bakal error Trying to access array offset on value of type null
        if(isset($url[0])){ //Isset adalah sebuah fungsi dari PHP yang melakukan pengecekan terhadap variabel
            if(file_exists('../app/controllers/' . $url[0] . '.php')){
                $this->controller = $url[0];
                unset($url[0]);
            }
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //Method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //Parameters
        if(!empty($url)){
            $this->params = array_values($url);
        }

        //Run Controller and Method, and Send The Parameters if Exists
        call_user_func_array([$this->controller, $this->method], $this->params);
    }


    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}