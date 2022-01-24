<?php 
use Src\app\service\Page;
Page::checkAuth();// TODO необходимо реализовать доступ на каждой старнице
?>

<!DOCTYPE html>
<html lang="en">

<?php
    Page::page_component("head");
?>

<body>

<?php
    Page::page_component("navbar");
?>

    <div class="alert alert-primary" role="alert">
ARTICLE CREATE PAGE!
    </div>

</body>
</html>