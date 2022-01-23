<?php
namespace Src\core\models;

abstract class AbstractUser{

    protected $username, $email, $password , $user_id, $role_id;
    protected $connection;

    protected function Authorization($formdata){
        
    }

    protected function Registration($formdata){
        
    }

    protected static function createUser(){

    }

    protected static function deleteUser(){

    }

    protected static function updateUser(){

    }

    protected static function createComment(){
        
    }

}