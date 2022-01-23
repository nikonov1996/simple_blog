<?php
namespace app\controllers;
require_once "app/models/User.php";
use app\models\User;

class UserController{


    public function register($formdata){
        User::Registration($formdata);
    }


}