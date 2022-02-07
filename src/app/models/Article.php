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

    public static function updateArticleById($formdata){
        $article_id = $formdata['article_id'];
        $article_title = $formdata['article_title'];
        $article_description = $formdata['article_description'];
        $article_text = $formdata['article_text'];
        $sql = 'UPDATE `Articles` SET `article_name` = \''. $article_title .'\' , `article_description`= \'' . $article_description . '\' , `article_text`= \'' . $article_text . '\' WHERE `Articles`.`article_id`= ' . $article_id . ';';
        $db = new ConnectionDB();
        $db->sqlMake("db", $sql);
    }

    public static function createArticle($formdata){
        $article_title = $formdata['article_title'];
        $article_description = $formdata['article_description'];
        $article_text = $formdata['article_text'];
        $author_id = $formdata['author_id'];
        $sql = 'INSERT INTO Articles(article_name, article_description, article_text,author_id)
        VALUES ("' . $article_title . '","' . $article_description . '","' . $article_text . '","' . $author_id . '");';
        $db = new ConnectionDB();
        $db->sqlMake("db", $sql);
    }

    public static function deleteArticleById($article_id){
        $sql = 'DELETE FROM Articles WHERE `Articles`.`article_id`= ' . $article_id . ';';
        $db = new ConnectionDB();
        $db->sqlMake("db", $sql);
    }


}

