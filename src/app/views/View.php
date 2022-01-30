<?php
namespace Src\app\views;

class View {

    private static $view_data;

    public static function view($route , $data=null){
        if($data!=null){
            self::$view_data = $data;
        }
        require_once "src/app/views/pages/" . $route . ".php";
        
    }

    public static function setViewData($data){
        self::$view_data = $data;
    }
    public static function getViewData(){
        return self::$view_data;
    }



}