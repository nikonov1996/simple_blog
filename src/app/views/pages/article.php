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
    
    $page_content = View::getViewData();
    $article = $page_content['article'];
    $comments = $page_content['comments'];

    $_SESSION['article'] = [
        'article_id' => $article->article_id,
        'article_name' => $article->article_name,
        'article_description' => $article->article_description ,
        'article_text' => $article->article_text,
        'author_name' => $article->user_name,
        'author_email' => $article->user_email,
        'article_date' => $article->article_date
    ]
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
                if ($_SESSION['user']) { //TODO думаю стоит обернуть это в метод в модели юзера isUserAuth()
                    if($_SESSION['user']['role_id'] == 1 or $_SESSION['user']['user_id'] === $article->author_id){
                ?>
                <a href="/article_edit" class="btn btn-secondary" id="edit_button">Edit</a>
                <a href="/article/delete/<?= $article->article_id ?>" class="btn btn-danger" id="delete_button">Delete</a>
                <?php } ?>
            </div>
        </div>
    </div>
    
<?php
    Page::page_component("comments_list",$page_content);
    } 
?>

</body>
</html>