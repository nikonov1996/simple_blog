<?php
use Src\app\service\Router;
use Src\app\controllers\UserController;
use Src\app\controllers\ArticleController;

$lastUrlSymbol = end(explode("/",$_SERVER['QUERY_STRING']));

Router::route('/','welcome');
Router::route('/article_edit','article_edit');
Router::route('/registration','registration');
Router::route('/auth','auth');
Router::route('/new_article','new_article');


Router::post('/registration/register', UserController::class, 'register', true);
Router::post('/auth/login', UserController::class, 'login', true);
Router::post('/logout', UserController::class,'logout',false);
Router::post('/new_article/create',ArticleController::class,'createArticle',true);
Router::post('/article/edit/'. $lastUrlSymbol , ArticleController::class , "updateArticleById",true);

Router::get('/article/delete/'. $lastUrlSymbol , ArticleController::class , "deleteArticleById");
Router::get('/articles_list',ArticleController::class,"printAllArticles");
Router::get('/my_articles',ArticleController::class,"printUserArticles");
Router::get('/article/' . $lastUrlSymbol , ArticleController::class, "printArticleById");

Router::enable();



?>