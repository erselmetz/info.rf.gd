<?php

class AuthUser extends Controller{

    public function login(){
        $username = Post::require('username');
        $password = Post::require('password');

        echo $username.'<br>';
        echo $password.'<br>';
    }

    public function logout(){
        session_destroy();
    }
}