<?php
namespace Src\core\models;

abstract class AbstractComment{

    protected $comment_id, $comment_text,$comment_date, $user_id, $article_id;

    protected static function getCommentByArticleId($article_id){
        
    }
}