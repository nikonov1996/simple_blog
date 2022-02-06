<?php

namespace Src\app\service;
use Src\app\views\View;
use Src\app\controllers\UserController;
use Src\app\models\User;
use Src\app\models\Article;

class Router {

    private static $list = [];

    public static function route($uri, $page_name){
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    public static function post($uri , $class, $method , $formdata){
        self::$list[] = [
            "uri" => $uri,
            "class" => $class,
            "method" => $method,
            "post" => true,
            "formdata" => $formdata,
        ];
    }

    public static function get($uri , $class, $method ){
        self::$list[] = [
            "uri" => $uri,
            "class" => $class,
            "method" => $method,
            "get" => true,
            "id" => end(explode("/",$uri))
        ];
    }

    public static function enable(){
    
    $query = $_SERVER['QUERY_STRING'];    
       foreach (self::$list as $route){
        
        if ($route['uri'] === "/" . $query){
            
            if ($route["post"] === true && $_SERVER['REQUEST_METHOD'] === 'POST'){
                $action = new $route["class"];
                $method = $route["method"];
                if ($route["formdata"]){
                    $action->$method($_POST);
                } else {
                    $action->$method();
                }
                die();

            }elseif($route["get"] === true && $_SERVER['REQUEST_METHOD'] === 'GET'){
                $action = new $route["class"];
                $method = $route["method"];
                $action->$method($route["id"]);
                die();

            }else{
                View::view($route['page']);
                die();
            }
        }
        

       }
       self::not_found();
    }

    public static function not_found(){
        View::view("404");
    }

    public static function redirect($uri){
        View::view($uri);
    }

    

}

?>