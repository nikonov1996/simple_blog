<?php
namespace Src\app\models;
use Src\core\models\AbstractUser;
use Src\app\db\ConnectionDB;
//require_once "core/models/AbstractUser.php";
//require_once '../db/ConnectionDB.php';


class User extends AbstractUser{   

    public function Registration($formdata){
        $user_name = $formdata["username"];
        $user_email = $formdata["email"]; 
        $user_password = $formdata["password"];
        $user_role = 2;

        
        $db = new ConnectionDB();
        $connection = $db->getDBConnection("db");
        $sql = 'INSERT INTO Users(user_name, user_email, user_password,role_id) VALUES 
        ("'. $user_name .'","'. $user_email .'","'. $user_password .'", '. $user_role .');';
        $connection->query($sql);
    }

}