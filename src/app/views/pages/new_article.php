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
<form action="/new_article/create" method="post">
    <div class="card" >
            <div class="card-body">
                <h4 class="card-title">
                Article title:
                </h4>
                    <textarea class="form-control" name="article_title" cols="100" rows="1" placeholder="Write the article title here..."></textarea></p>
                <br>
                <h4>Description:</h4>
                <p class="card-text form-group">
                    <textarea class="form-control" name="article_description" cols="100" rows="3" placeholder="Write the article description here..."></textarea></p>
                </p>
                <br>
                <h4>Article content:</h4>
                <p class="card-text form-group">
                    <textarea class="form-control" name="article_text" cols="40" rows="15" placeholder="Write the article text here..."></textarea>
                </p>
                <input type="text"name="author_id" hidden="true" value=<?= $_SESSION['user']['user_id'] ?>>
                <br>
                <p>
                    <strong>Author </strong> <?=$_SESSION['user']['user_name']?>
                </p>
                <p>
                    <strong>Email: </strong> <?=$_SESSION['user']['user_email']?>
                </p>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
    </div>
</form>
</body>
</html>