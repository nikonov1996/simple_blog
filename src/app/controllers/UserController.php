<?php
namespace Src\app\controllers;
use Src\app\service\Router;
use Src\app\models\User;

class UserController{


    public function register($formdata){
        //$user = new User;
        User::Registration($formdata);
    }

    public function login($formdata){
       // \session_start();
        User::Authorization($formdata);
    }

    public function logout(){
        //\session_start();
        User::Logout();
    }




}