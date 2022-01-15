<?php
require_once("/var/www/html/core/db/AbstractDBConnection.php");

class ConnectonDB extends AbstractDBConection{


    public function getDBConnection(){
        $this->db_connection = null;
        try {
            $this-> db_connection = new mysqli(
                $this->db_host,
                $this->db_user,
                $this->db_password
            );
            echo "Есть соединение с БД";

        } catch(Exception $e) {
            echo "Ошибка соединения c БД: " . $e->getMessage();
        }
        var_dump($this->db_connection);
        return $this->db_connection;
       

    }
}