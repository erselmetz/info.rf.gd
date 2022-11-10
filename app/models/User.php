<?php

use Connection\Database as DB;
use Connection\SQLite as SQLite;

class User extends DB{

    public static function check_username($params){
        return DB::table('user')->select('username')->where("username = $params")->limit('1')->get();
    }
}