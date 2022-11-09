<?php

function assets($params){
    global $RewriteBase;
    return $RewriteBase.'public/'.$params;
}

class Post{

    private static $var;

    public static function require($params){

        if(!isset($_POST[$params])){
            return null;
        }else{
            if($_POST[$params] != null || $_POST[$params] != ''){
                $a = htmlspecialchars($_POST[$params]);
                $b = htmlentities($a);
                $c = strip_tags($b);
                Post::$var = $c;
                return Post::$var;
            }
        }
        return new Post;
    }

    public static function limit($params){
        if(strlen(Post::$var > $params)){
            return false;
        }else{
            return true;
        }
        return new Post;
    }
}

class App{

    protected $controller = 'html';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){

        $url = $this->parseUrl();

        ($url == null)?$url[0] = $this->controller:'';

        // classes
        if(file_exists('app/controllers/'.$url[0].'.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once 'app/controllers/'.$this->controller.'.php';

        $this->controller = new $this->controller;

        // method/function of classes
        if(isset($url[0])){
            if(method_exists($this->controller, $url[0])){
                $this->method = $url[0];
                unset($url[0]);
            }
        }
        
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], [$this->params]);
    }

    public function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        }
    }
}