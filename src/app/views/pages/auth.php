<?php use app\service\Page; ?>

<!DOCTYPE html>
<html lang="en">

<?php
    Page::page_component("head");
?>

<body>

<?php
    Page::page_component("navbar");
?>
<?php
    Page::page_component("signin_form");
?>

</body>
</html>