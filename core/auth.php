<?php

class Auth{

    public static function user(){
        if( !isset($_SESSION['email']) && !isset($_SESSION['password'])){
            echo header('location: login');
        }
    }
}