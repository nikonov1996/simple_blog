<?php
require_once("/src/core/db/AbstractDBConnection.php");

class AbstractDBMigration extends AbstractDBConnection{
    //TODO Необходимо решить проблему с грабом файла .env что бы не хранить переменные в чистом виде тут.
    protected $db_host = 'db';
    protected $db_user = 'tester';
    protected $db_password = 'tester';
    protected $db_table_versions = 'versions';
    protected $db_name = 'test';
    
    // Получаем список файлов для миграций
    protected function getMigrationFiles($conn) {
        // Находим папку с миграциями
        $sqlFolder = str_replace('\\', '/', '/src/app/db/migrations/');
        // Получаем список всех sql-файлов
        $allFiles = glob($sqlFolder . '*.sql');
    
        // Проверяем, есть ли таблица versions 
        // Так как versions создается первой, то это равносильно тому, что база не пустая
        $query = sprintf('show tables from `%s` like "%s"', $this->db_name, $this->db_table_versions);
        $data = $conn->query($query);
        $firstMigration = !$data->num_rows;
        
        // Первая миграция, возвращаем все файлы из папки sql
        if ($firstMigration) {
            return $allFiles;
        }
    
        // Ищем уже существующие миграции
        $versionsFiles = array();
        // Выбираем из таблицы versions все названия файлов
        $query = sprintf('select `name` from `%s`', $this->db_table_versions);
        $data = $conn->query($query)->fetch_all(MYSQLI_ASSOC);
        // Загоняем названия в массив $versionsFiles
        // Не забываем добавлять полный путь к файлу
        foreach ($data as $row) {
            array_push($versionsFiles, $sqlFolder . $row['name']);
        }
    
        // Возвращаем файлы, которых еще нет в таблице versions
        return array_diff($allFiles, $versionsFiles);
    }

    // Накатываем миграцию файла
    protected function migrate($conn, $file) {
        // Формируем команду выполнения mysql-запроса из внешнего файла
        $command = sprintf('mysql -u%s -p%s -h %s -D %s < %s', $this->db_user, $this->db_password, $this->db_host, $this->db_name, $file);    
        // Выполняем shell-скрипт
        shell_exec($command);
    
        // Вытаскиваем имя файла, отбросив путь
        $baseName = basename($file);
        // Формируем запрос для добавления миграции в таблицу versions
        $query = sprintf('insert into `%s` (`name`) values("%s")', $this->db_table_versions, $baseName);
        // Выполняем запрос
        $conn->query($query);

    }

    // Проверяем, есть ли новые миграции и накатываем новые миграции если нужно
    protected function runNewMigrates($conn, $files) {
        if (empty($files)) {
            echo 'Ваша база данных в актуальном состоянии.';
        } else {
            echo 'Начинаем миграцию...<br><br>';
         
            // Накатываем миграцию для каждого файла
            foreach ($files as $file) {
                $this->migrate($conn, $file);
                // Выводим название выполненного файла
                echo basename($file) . '<br>';
            }
         
            echo '<br>Миграция завершена.';    
        }
    }
}