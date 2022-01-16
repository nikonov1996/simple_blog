<?php
require_once("/src/app/db/ConnectionDB.php");
require_once("/src/core/db/AbstractDBMigration.php");

$db = new ConnectonDB();
$mig = new AbstractDBMigration();

$con = $db->getDBConnection();
$files = $mig->getMigrationFiles($con);
$mig->runNewMigrates($con, $files);
