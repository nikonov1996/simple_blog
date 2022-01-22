<?php

abstract class AbstractDBConection{
    //TODO Необходимо решить проблему с грабом файла .env что бы не хранить переменные в чистом виде тут.
    protected $db_host;
    protected $db_user;
    protected $db_password;
    protected $db_table_versions; // не знаю для чего , но пока пусть будет)
    protected $db_name;
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