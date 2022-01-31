<?php
namespace Src\app\models;
use Src\core\models\AbstractArticle;
use Src\app\db\ConnectionDB;
use Src\app\service\Router;

class Article extends AbstractArticle{

    public static function getAllArticles(){
        $sql = 'SELECT article_id,article_name,article_description,article_text,article_date,author_id,role_id,user_name, user_email FROM Articles
        INNER JOIN Users ON author_id = user_id';
        $db = new ConnectionDB();
        $result = $db->sqlGet("db",$sql);
        while ($data = $result->fetch_object()){
            $articles[] = $data;
        }
        return $articles;
    }

    public static function getArticleById($article_id){
        $sql = 'SELECT article_id,article_name,article_description,article_text,article_date,author_id,role_id,user_name, user_email FROM Articles INNER JOIN Users ON author_id = user_id where article_id ='. $article_id .';';
        $db = new ConnectionDB();
        $result = $db->sqlGet("db",$sql);
        return $result->fetch_object();
    }
}

