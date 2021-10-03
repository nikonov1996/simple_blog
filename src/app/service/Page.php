<?php

namespace app\service;

class Page{

    public static function page_component($component){
        require_once("app/views/components/" . $component . ".php");
    }

}

?>