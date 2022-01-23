<?php

namespace Src\app\service;
//require_once "app/controllers/UserController.php";
use Src\app\controllers\UserController;
use app\models\User;

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
            "formdata" => $formdata
        ];
    }

    public static function enable(){
    
    $query = $_SERVER['QUERY_STRING'];    
    // $query = $_GET['q'];

       foreach (self::$list as $route){

        if ($route['uri'] === "/" . $query){
            
            if ($route['post'] === true && $_SERVER['REQUEST_METHOD'] === 'POST'){

                $action = new $route["class"];
                $method = $route["method"];
                if ($route["formdata"]){
                    $action->$method($_POST);
                } else {
                    $action->$method();
                }
                die();

            }else{
                require_once "src/app/views/pages/" . $route['page'] . ".php";
                die();
            }
        }
        

       }
       self::not_found();
    }

    private static function not_found(){
        require_once "src/app/views/pages/404.php";
    }

}

?>