<?php
require_once __DIR__ ."/AbstractDBConnection.php";

abstract class AbstractDBMigration{

    protected $migration_path;

    public function runMigrate($connection){
        try{
            $migration_files = $this->getMigrationsList($this->migration_path);

            for ($i=2; $i<count($migration_files) ; $i++){
                $command = file_get_contents($this->migration_path . $migration_files[$i]);
                $connection->query($command);
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    private function getMigrationsList($migration_path){
        try{
            $migration_files = scandir($migration_path);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
        return $migration_files;
    }

}