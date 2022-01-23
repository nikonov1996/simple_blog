<?php

namespace Src\app\service;

class Page{

    public static function page_component($component){
        require_once("src/app/views/components/" . $component . ".php");
    }

}

?>