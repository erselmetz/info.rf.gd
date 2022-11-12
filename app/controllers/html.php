<?php

class Html extends Controller{
    public function index($get){
        $this->view('index');
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

    public function forms(){
        $this->view('forms');
    }

    public function profile(){
        $this->view('profile');
    }

    public function tables(){
        $this->view('tables');
    }
}