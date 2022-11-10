<?php

class AuthUser extends Controller{

    public function login(){
        $username = Post::require('username');
        $password = Post::require('password');

        $auth = User::auth($username);
        if($auth['email'] != null){
            if(password_verify($password, $auth['password'])){
                echo json_encode($auth);
            }
        }

    }

    public function register(){
        $firstname = Post::require('firstname');
        $lastname = Post::require('lastname');
        $email = Post::require('email');
        $password = Post::require('password');
    }

    public function logout(){
        session_destroy();
    }
}