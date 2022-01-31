<?php
namespace Src\app\controllers;
use Src\app\service\Router;
use Src\app\models\Article;
use Src\app\models\User;
use Src\app\views\View;

class ArticleController{


    public function printAllArticles(){
        $articles = Article::getAllArticles();
        View::view('articles_list',$articles);
        
    }

    public function printUserArticles(){
        $articles = Article::getAllArticles();
        View::view('my_articles',$articles);
    }

    public function printArticleById($id){
        $article = Article::getArticleById($id);
        View::view('article', $article);
    }




}