<?php
namespace Src\app\db;

use Src\core\db\AbstractDBConection;

class ConnectionDB extends AbstractDBConection{

    protected $db_host = 'db'; //localhost:9906
    protected $db_user = 'tester';
    protected $db_password = 'tester';
    protected $db_table_versions = 'versions'; // не знаю для чего , но пока пусть будет)
    protected $db_name = 'simple_blog_db';

}