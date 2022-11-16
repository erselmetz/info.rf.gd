<?php

class Auth{

    public static function user(){
        if( !isset($_SESSION['email']) && !isset($_SESSION['password'])){
            return false;
        }else{
            return true;
        }
    }
}