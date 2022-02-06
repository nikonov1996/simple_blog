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
<form action="/article/edit/<?= $_SESSION['article']['article_id'] ?>" method="post">
    <div class="card" >
            <div class="card-body">
                <h4 class="card-title">
                Article title:
                </h4>
                    <textarea class="form-control" name="article_title" cols="100" rows="1"><?=$_SESSION['article']['article_name']?></textarea></p>
                <br>
                <h4>Description:</h4>
                <p class="card-text form-group">
                    <textarea class="form-control" name="article_description" cols="100" rows="3"><?=$_SESSION['article']['article_description']?></textarea></p>
                </p>
                <br>
                <h4>Article content:</h4>
                <p class="card-text form-group">
                    <textarea class="form-control" name="article_text" cols="40" rows="15"><?=$_SESSION['article']['article_text']?></textarea></p>
                    <input type="text"name="article_id" hidden="true" value=<?= $_SESSION['article']['article_id'] ?>>
                </p>
                <br>
                <p>
                    <strong>Added by </strong> <?=$_SESSION['article']['author_name']?>
                    <strong> at </strong> <?=$_SESSION['article']['article_date']?>
                    <strong>You can write to author by email: </strong> <?=$_SESSION['article']['author_email']?>
                </p>
                <button type="submit" class="btn btn-primary">Save</button>
                <div class="float-end">
                    <a href="/article/delete/<?= $_SESSION['article']['article_id'] ?>" class="btn btn-danger" id="delete_button">Delete</a>
                </div>
            </div>
    </div>
</form>
</body>
</html>