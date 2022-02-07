<?php
use Src\app\service\Router;
use Src\app\controllers\UserController;
use Src\app\controllers\ArticleController;


Router::route('/test','test');
//Router::route('/articles_list', 'articles_list');
Router::route('/','welcome');
//Router::route('/my_articles','my_articles');
Router::route('/article_edit','article_edit');
Router::route('/registration','registration');
Router::route('/auth','auth');
Router::route('/new_article','new_article');


Router::post('/registration/register', UserController::class, 'register', true);
Router::post('/auth/login', UserController::class, 'login', true);
Router::post('/logout', UserController::class,'logout',false);
Router::post('/new_article/create',ArticleController::class,'createArticle',true);
Router::get('/article/delete/'. end(explode("/",$_SERVER['QUERY_STRING'])),ArticleController::class , "deleteArticleById");
Router::post('/article/edit/'. end(explode("/",$_SERVER['QUERY_STRING'])),ArticleController::class , "updateArticleById",true);
Router::get('/articles_list',ArticleController::class,"printAllArticles");
Router::get('/my_articles',ArticleController::class,"printUserArticles");
Router::get('/article/' . end(explode("/",$_SERVER['QUERY_STRING'])), ArticleController::class, "printArticleById");

Router::enable();



?>