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
       
        $query = $_GET['q'];

       foreach (self::$list as $route){
            if ($route['uri'] === "/" . $query){
                require_once "/var/www/html/app/views/" . $route['page'] . ".php";
                die();
            }
            self::not_found();
       }
       
    }

    private static function not_found(){
        require_once "/var/www/html/app/views/404.php";
    }

}

?>