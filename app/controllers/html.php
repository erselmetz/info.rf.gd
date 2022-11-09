<?php

class Html extends Controller{
    public function index($get){
        $this->view('home');
    }

    public function home(){
        $this->view('home');
    }

    public function login(){
        $this->view('auth/login');
    }

    public function register(){
        $this->view('auth/register');
    }

    public function setup(){
        if(Auth::user() == false){
            echo header("location: login");
        }
    }
}