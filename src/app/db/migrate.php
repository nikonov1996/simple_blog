<?php
require_once "../../../vendor/autoload.php";

$db = new Src\app\db\ConnectionDB;
$migration = new Src\app\db\MigrationDB;
$connection = $db->getDBConnection("localhost:9906"); //TODO недопустимо явно указывать хост,нужно решить эту проблему через разное окружение 
$migration->runMigrate($connection);

