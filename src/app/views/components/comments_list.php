
<?php 
use Src\app\service\Page;
$pageContent = Page::getPageData();
$article = $pageContent['article'];
$comments = $pageContent['comments'];
?>
<div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">                
            <h4>Comments:</h4>
            </button>
        </h2>
    <?php
    if($comments != null){
        foreach( $comments as $comment){?>

            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <strong><?=$comment->user_name?></strong> <?=$comment->comment_date?>
                    <p><?=$comment->comment_text?></p>
                </div>
            </div>
        
    
    <?php 
        }
    }else{
    ?>
           <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <h5>No comments for this article..</h5>
                </div>
            </div> 
    <?php } ?>
        
    <div class="float-start container">
        <div class="row">
        
            <form action="/article/addComment/" method="post">
                <br>
                <div class="col">
                    <textarea class="form-control" name="comment_text" cols="50" rows="2" placeholder="Write you comment here..."></textarea>
                    <input type="text"name="author_id" hidden="true" value=<?= $_SESSION['user']['user_id'] ?>>
                    <input type="text"name="article_id" hidden="true" value=<?= $article->article_id ?>>
                </div>
                <br>
                <div class="col">
                    <button type="submit" class="btn btn-secondary">Add comment</button>
                </div>
            </form>
        </div>
    </div>
</div>
  

