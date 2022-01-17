<?php
require_once "./ConnectionDB.php";

function getMigrationsList(){

    try{
        $mig_files = scandir("./migrations");
    }catch(Exception $e){
        echo $e->getMessage();
    }
    
    return $mig_files;
}

function runMigrate($connection,$files){
    for ($i=2; $i<count($files) ; $i++){
        $command = file_get_contents("./migrations/" . $files[$i]);
        $connection->query($command);
    }

}

$files = getMigrationsList();
$con = new ConnectonDB();
$db = $con->getDBConnection();
//runMigrate($db, $files);