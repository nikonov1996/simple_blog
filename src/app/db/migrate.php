<?php
require_once __DIR__ ."/ConnectionDB.php";
require_once __DIR__ ."/MigrationDB.php";

$db = new ConnectonDB();
$migration = new MigrationDB();
$connection = $db->getDBConnection();
$migration->runMigrate($connection);