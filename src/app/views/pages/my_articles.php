<?php 
use Src\app\service\Page;
use Src\app\views\View;
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

    <?php

    $articles = View::getViewData();
    foreach( $articles as $article){
        if($_SESSION['user']['role_id'] === $article->role_id){
    ?> 
    <div class="card" >
        <div class="card-body">
            <h5 class="card-title"><?= $article->article_name ?></h5>
            <p class="card-text"><?= $article->article_description ?></p>
            <p>
                <strong>Added by </strong> <?= $article->user_name ?>
                <strong> at </strong> <?=$article->article_date?>
                <strong>You can write to author by email: </strong> <?=$article->user_email?>
            </p>
            <a href="/article/<?= $article->article_id ?>" class="btn btn-primary">Read</a>
            <div class="float-end">
                <a href="/article/<?= $article->article_id ?>" class="btn btn-secondary">Edit</a>
                <a href="/article/<?= $article->article_id ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    <?php }} ?>

</body>
</html>