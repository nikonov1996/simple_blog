<?php
use app\service\Router;

Router::route('/test','test');
Router::route('/articles_list', 'articles_list');
Router::route('/','welcome');

Router::enable();



?>