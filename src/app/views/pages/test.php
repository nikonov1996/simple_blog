<?php use app\service\Page; ?>

<!DOCTYPE html>
<html lang="en">

<?php
    Page::page_component("head");
    require_once("/var/www/html/app/db/ConnectionDB.php");
    $con = new ConnectonDB();
    $db = $con->getDBConnection();
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