<?php
namespace Src\core\models;

abstract class AbstractUser{

    protected $username, $email, $password , $user_id, $role_id;

    protected static function Authorization($formdata){
        
    }

    protected static function Registration($formdata){
        
    }

    protected static function checkUserPresent(){
        
    }

    protected static function deleteUser(){

    }

    protected static function updateUser(){

    }

    protected static function createComment(){
        
    }

}