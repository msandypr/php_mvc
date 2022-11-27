<?php

class Flasher{
    public static function setFlash($message, $action, $types){
        $_SESSION['flash'] = [
            'message' => $message,
            'action' => $action,
            'types' => $types
        ];
    }

    public static function flash(){
        if(isset($_SESSION['flash'])){
            echo '<div class="alert alert-' . $_SESSION['flash']['types'] .' alert-dismissible fade show role="alert">
                    Item <strong>' . $_SESSION['flash']['message'] .'</strong>'. $_SESSION['flash']['action'].'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            unset($_SESSION['flash']);
        }
    }
}