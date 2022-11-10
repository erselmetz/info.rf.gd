<?php

class AuthUser extends Controller{

    public function login(){
        $username = Post::require('username');
        $password = Post::require('password');
        
        if(User::check_username($username)){
            
        }
    }

    public function logout(){
        session_destroy();
    }
}