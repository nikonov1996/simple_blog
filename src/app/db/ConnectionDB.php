<?php
require_once ("../../core/db/AbstractDBConnection.php");

class ConnectonDB extends AbstractDBConection{

    protected $db_host = 'localhost:9906';
    protected $db_user = 'tester';
    protected $db_password = 'tester';
    protected $db_table_versions = 'versions'; // не знаю для чего , но пока пусть будет)
    protected $db_name = 'simple_blog_db';

}