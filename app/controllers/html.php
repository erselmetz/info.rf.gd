<?php

class Html extends Controller{
    public function index($get){
        $this->auth();
        $this->view('index');
    }

    public function login(){
        $this->view('auth/login');
    }

    public function register(){
        $this->view('auth/register');
    }

    public function home(){
        $this->auth();
        $this->view('index');
    }

    public function setup(){
        $this->auth();
    }

    public function forms(){
        $this->auth();
        $this->view('forms');
    }

    public function profile(){
        $this->auth();
        $this->view('profile');
    }

    public function tables(){
        $this->auth();
        $this->view('tables');
    }
}