<?php
namespace Src\app\controllers;
use Src\app\service\Router;
use Src\app\models\Article;
use Src\app\models\User;
use Src\app\views\View;

class ArticleController{


    public function printAllArticles(){
        $articles = Article::getAllArticles();
        View::view('/articles_list',$articles);
        
    }




}