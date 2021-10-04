<?php

namespace app\service;

class Router {

    private static $list = [];

    public static function route($uri, $page_name){
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    public static function enable(){
    
    $query = $_SERVER['QUERY_STRING'];    
    // $query = $_GET['q'];

       foreach (self::$list as $route){
            if ($route['uri'] === "/" . $query){
                require_once "app/views/pages/" . $route['page'] . ".php";
                die();
            }
            
       }
       self::not_found();
    }

    private static function not_found(){
        require_once "app/views/pages/404.php";
    }

}

?>