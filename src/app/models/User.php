<?php
namespace app\models;
use \core\models\AbstractUser;
use \app\db\ConnectionDB;
//require_once "core/models/AbstractUser.php";
//require_once '../db/ConnectionDB.php';


class User extends AbstractUser{   

    public static function Registration($formdata){
        $user_name = $formdata["username"];
        $user_email = $formdata["email"]; 
        $user_password = $formdata["password"];
        $user_role = 2;

        
        $connection = new ConnectionDB();
        $connection->getDBConnection();
        $sql = 'INSERT INTO Users(user_name, user_email, user_password,role_id) VALUES 
        ("'. $user_name .'","'. $user_email .'","'. $user_password .'", '. $user_role .');';
        $connection->query($sql);
    }

}