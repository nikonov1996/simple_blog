<?php use Src\app\service\Page; ?>

<!DOCTYPE html>
<html lang="en">

<?php
    Page::page_component("head");
?>

<body>

<?php
    Page::page_component("navbar");
?>
    <br>
    <div class="card text-center">
    <div class="card-header">
        <?php if($_SESSION['user']){?>
            <h4>Welcome dear <?= $_SESSION["user"]['user_name'] ?> !</h4>
        <?php }else{ ?>
            <h4>Welcome dear friend!</h4>
        <?php } ?>
    </div>
    <div class="card-body">
        <h5 class="card-title">This is a simple project for php+mysql+js learning!</h5>
        <p class="card-text">You can registrate on this service and after authorization,
            read,create,update and delete you own articles.
            Read other author's articles without authorization. 
        </p>
        <a href="/articles_list" class="btn btn-primary">Try service!</a>
    </div>
    <div class="card-footer text-muted">
        Have a nice day!
    </div>
    </div>

</body>
</html>