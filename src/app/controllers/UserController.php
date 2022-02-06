<?php
namespace Src\app\controllers;
use Src\app\service\Router; //TODO он тут нужен вообще??
use Src\app\models\User;

class UserController{


    public function register($formdata){
        User::Registration($formdata);
    }

    public function login($formdata){
        User::Authorization($formdata);
    }

    public function logout(){
        User::Logout();
    }




}