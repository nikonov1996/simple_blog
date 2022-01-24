<?php
namespace Src\app\models;
use Src\core\models\AbstractUser;
use Src\app\db\ConnectionDB;
use Src\app\service\Router;

class User extends AbstractUser{   

    public static function Registration($formdata){
        $user_name = $formdata["username"];
        $user_email = $formdata["email"]; 
        $user_password = $formdata["password"];
        $user_role = 2;
        //TODO добавить повтор пароля и валидацию на совпадение
        $sql = 'INSERT INTO Users(user_name, user_email, user_password,role_id) VALUES 
        ("'. $user_name .'","'. $user_email .'","'. $user_password .'", '. $user_role .');';
        $db = new ConnectionDB();
        $db->sqlMake("db", $sql);
        Router::redirect("/auth");
    }

    public static function Authorization($formdata){
        
        $email = $formdata["email"];
        $password = $formdata["password"];
        $sql = 'SELECT * FROM Users WHERE user_password="'. $password .'" and user_email="'. $email .'";';
        $db = new ConnectionDB();
        $result = $db->sqlGet("db",$sql);
        $user = $result->fetch_object();
        if (!$user){
            //die("User not found"); // TODO нужен нормальный вывод ошибок
            Router::redirect("/auth");
        }else{
            
            if(!($user->user_password === null) && $password === $user->user_password){  //TODO хранить пароли хэшированные и сравнивать с password_verify()
            
                $_SESSION["user"] = [
                "user_id" => $user->user_id,
                "user_name" => $user->user_name,
                "user_email" => $user->user_email,
                "role_id" => $user->role_id
            ];
                Router::redirect("/my_articles");
            }else{
                Router::redirect("/auth");
            }
        }
        
    }

    public static function Logout(){
        unset($_SESSION['user']);
        Router::redirect("/auth");
    }

}