<?php
    use Src\app\service\Page;
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
    404 - PAGE NOT FOUND!
    </div>

</body>
</html>