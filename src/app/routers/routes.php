<?php
use app\service\Router;

Router::route('/test','test');
Router::route('/articles_list', 'articles_list');
Router::route('/','welcome');
Router::route('/article_create','article_create');
Router::route('/article_edit','article_edit');
Router::route('/registration','registration');
Router::route('/auth','auth');

Router::enable();



?>