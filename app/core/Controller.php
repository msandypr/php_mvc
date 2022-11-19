<?php
class Controller{
    public function view($view, $data = []){
        require_once '../app/views/' . $view . '.php';
    }
}
/*
[ENGLISH]
You should be able to distinguish app/core/Controller.php from the Controller in the app/controller folder
So this Controller class is the main class, while what is in the app/controller is a controller that extends from the main class

[INDONESIA]
Kalian harus bisa membedakan app/core/Controller.php dengan Controller yang ada di folder app/controller
Jadi kelas Controller ini merupakan kelas utama, sedangkan yang ada di app/controller adalah controller yang extend dari kelas utama

Muhammad Sandy Putra Riyadi - @msandypr
*/  