<?php use app\service\Page; ?>

<!DOCTYPE html>
<html lang="en">

<?php
    Page::page_component("head");
    require_once("app/db/ConnectionDB.php");
    $con = new ConnectonDB();
    $db = $con->getDBConnection();
    //phpinfo();
    //$sql = 'INSERT INTO cities SET name = "Санкт-Петербург"';
    // $sql = "create table supply(
    //     supply_id	INT PRIMARY KEY AUTO_INCREMENT,
    //     title	VARCHAR(50),
    //     author	VARCHAR(30),
    //     price	DECIMAL(8, 2),
    //     amount	INT
    //     )";
    //$result = mysqli_query($db, $sql);
    $commands = file_get_contents("app/db/migrations/0000_base.sql");
    //echo $commands;
    $db->query($commands);
    // var_dump($sql);
    var_dump($db);
?>

<body>

<?php
    Page::page_component("navbar");
?>

    <div class="alert alert-primary" role="alert">
TEST PAGE    
</div>

</body>
</html>