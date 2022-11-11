<?php

class AuthUser extends Controller{

    public function login(){

        $email = Post::require('email');
        $password = Post::require('password');

        $response = [];
        $response["email"] = false;
        $response["password"] = false;

        $auth = User::auth($email);

        if($auth != false){
            if(password_verify($password, $auth['password'])){
                $response['email'] = true;
                $response['password'] = true;
            }else{
                $response['email'] = true;
                $response['password'] = false;
            }
        }
        echo json_encode($response);
    }

    public function register(){

        $firstname = Post::require('firstname');
        $lastname = Post::require('lastname');
        $email = Post::require('email');
        $password = Post::require('password');

        if($firstname != '' && $lastname != '' && $email != '' && $password !=''){
            User::register_new([
                "firstname"=> $firstname,
                "lastname"=> $lastname,
                "email"=> $email,
                "password"=> $password,
            ]);
            echo json_encode(["status" => true]);
        }else{
            echo json_encode(["status" => false]);
        }
    }

    public function logout(){
        session_destroy();
    }
}