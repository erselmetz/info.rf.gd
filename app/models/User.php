<?php

use Connection\Database as DB;

class User extends DB{

    private static $user;

    public static function auth($params){
        $check = DB::table('users')->where("email = '$params' ")->limit('1')->get();

        if($check != null){
            User::$user = $check[0];
        }else{
            User::$user = false;
        }
        return User::$user;
    }
}