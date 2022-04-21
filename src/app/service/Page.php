<?php

namespace Src\app\service;
use Src\app\service\Router;

class Page{

    private static $page_data;

    public static function page_component($component , $data=null){
        if($data!=null){
            self::$page_data = $data;
        }
        require_once("src/app/views/components/" . $component . ".php");
    }

    public static function getPageData(){
        return self::$page_data;
    }

    public static function checkAuth(){
        if(!$_SESSION["user"]){
            Router::redirect('/auth');
        }
    }

    public static function isAuth(){
        if($_SESSION["user"]){
            return true; 
        }else return false;
    }

    public static function getRole(){
        
        $role = $_SESSION['user']["role_id"];
        var_dump($role);
           
    }

}

?>