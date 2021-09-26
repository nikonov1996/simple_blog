<?php
namespace app\service;

class Router {

    // function __construct() {
    //     echo "created";
    // }
    private static $list = [];

    public static function route($uri, $page_name){
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    public static function enable(){
       //print_r(self::$list);
       $query = $_GET['q'];
       echo $query;
    }

}

?>