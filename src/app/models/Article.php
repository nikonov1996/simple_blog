<?php
namespace Src\app\models;
use Src\core\models\AbstractArticle;
use Src\app\db\ConnectionDB;
use Src\app\service\Router;

class Article extends AbstractArticle{

    public static function getAllArticles(){
        $sql = 'SELECT * FROM Articles;';
        $db = new ConnectionDB();
        $result = $db->sqlGet("db",$sql);
        while ($data = $result->fetch_object()){
            $articles[] = $data;
        }
        return $articles;
    }
}

