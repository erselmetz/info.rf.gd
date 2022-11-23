<?php

class Auth {

    public static $position;
    public static $email;
    public static $password;

    public static function user() {

        $response = false;

        if (isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['position'])) {

            Auth::$position = $_SESSION['position'];
            Auth::$email = $_SESSION['email'];
            Auth::$password = $_SESSION['password'];
            
            $response = true;
        }

        return $response;
        return new Auth;
    }
}