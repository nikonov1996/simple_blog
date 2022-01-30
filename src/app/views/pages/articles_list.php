<?php 
use Src\app\service\Page;
use Src\app\views\View;
use Src\app\models\User; ?>

<!DOCTYPE html>
<html lang="en">

<?php Page::page_component("head"); ?>

<body>

<?php Page::page_component("navbar"); ?>
 
    
    
    <?php
    $articles = View::getViewData();
    foreach( $articles as $article){
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
        </div>
    </div>
    <?php } ?>

   

</body>
</html>