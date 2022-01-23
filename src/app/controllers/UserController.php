<?php
namespace Src\app\controllers;
use Src\app\models\User;

class UserController{


    public function register($formdata){
        $user = new User;
        $user->Registration($formdata);
    }


}