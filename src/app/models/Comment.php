<?php
namespace Src\app\models;
use Src\core\models\AbstractArticle;
use Src\core\models\AbstractComment;
use Src\app\db\ConnectionDB;
use Src\app\service\Router;

class Comment extends AbstractComment{

    public static function getCommentByArticleId($article_id){
        $sql = 'SELECT Article_comments.comment_id , Article_comments.comment_text, Article_comments.comment_date, Article_comments.article_id, Users.user_name, Users.user_email FROM Article_comments INNER JOIN Users ON Article_comments.user_id = Users.user_id WHERE Article_comments.article_id = ' . $article_id . ' ;';
        $db = new ConnectionDB();
        $result = $db->sqlGet("db",$sql);
        while ($data = $result->fetch_object()){
            $comments[] = $data;
        }
        return $comments;
    }

}