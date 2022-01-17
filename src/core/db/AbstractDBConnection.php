<?php

class AbstractDBConection{
    //TODO Необходимо решить проблему с грабом файла .env что бы не хранить переменные в чистом виде тут.
    protected $db_host = 'localhost';
    protected $db_user = 'tester';
    protected $db_password = 'tester';
//    protected $db_table_versions = 'versions';
    protected $db_name = 'simple_blog_db';
    protected $db_connection;

    public function getDBConnection(){
        $this->db_connection = null;
        try {
            $this-> db_connection = new mysqli(
                $this->db_host,
                $this->db_user,
                $this->db_password,
                $this->db_name,
            );

        } catch(Exception $e) {
            echo "Ошибка соединения c БД: " . $e->getMessage();
        }
        
        return $this->db_connection;
    }
}