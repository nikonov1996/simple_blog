<?php 
use Src\app\service\Page;
use Src\app\views\View;
Page::checkAuth();
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

    <?php

    $article = View::getViewData();
    ?> 
    <div class="card" >
        <div class="card-body">
            <h2 class="card-title"><?= $article->article_name ?></h2>
            <br>
            <h4>Description:</h4>
            <p class="card-text"><?= $article->article_description ?></p>
            <br><br>
            <p class="card-text"><?=$article->article_text?></p>
            <br>
            <p>
                <strong>Added by </strong> <?= $article->user_name ?>
                <strong> at </strong> <?=$article->article_date?>
                <strong>You can write to author by email: </strong> <?=$article->user_email?>
            </p>
            <div class="float-end">
                <?php 
                if ($_SESSION['user'] && $_SESSION['user']['user_id']===$article->author_id){
                ?>
                <a href="/article/<?= $article->article_id ?>" class="btn btn-secondary" id="edit_button">Edit</a>
                <a href="/article/<?= $article->article_id ?>" class="btn btn-danger" id="delete_button">Delete</a>
                <?php } ?>
            </div>
        </div>
    </div>
    

</body>
</html>