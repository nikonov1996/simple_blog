<?php
namespace Src\core\db;

abstract class AbstractDBConection{
    //TODO Необходимо решить проблему с грабом файла .env что бы не хранить переменные в чистом виде тут.
    //protected $db_host;
    protected $db_user;
    protected $db_password;
    protected $db_table_versions; // не знаю для чего , но пока пусть будет)
    protected $db_name;
    protected $db_connection;

    public function getDBConnection($db_host){
        $this->db_connection = null;
        try {
            $this-> db_connection = new \mysqli(
                $db_host,
                $this->db_user,
                $this->db_password,
                $this->db_name,
            );

        } catch(Exception $e) {
            echo "Ошибка соединения c БД: " . $e->getMessage();
        }
        
        return $this->db_connection;
    }

    //функция для получения инфы из дб
    public function sqlGet($db_host, $sql){
        try{
            $connection = $this->getDBConnection($db_host);
            $result = $connection->query($sql);
        }catch(Exception $e){
            echo "Eror message: " . $e;
        }
        return $result;
    }
    //функция для изменения инфы в дб
    public function sqlMake($db_host, $sql){
        try{
            $connection = $this->getDBConnection($db_host);
            $connection->query($sql);
        }catch(Exception $e){
            echo "Eror message: " . $e;
        }
    }

}