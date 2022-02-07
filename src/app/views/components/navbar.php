    
<?php 
use Src\app\service\Page;
?>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Simple Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="" id="navbarNav">
        <ul class="navbar-nav">
            <?php
            if (Page::isAuth()){
            ?>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/articles_list">List of articles</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/new_article">Create article</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/my_articles">My articles</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                    <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </li>
            <?php
            }else{
            ?>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/articles_list">List of articles</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/registration">Registration</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/auth">Authorization</a>
                </li>
            <?php
            }
            ?>
        </ul>
        </div>
    </div>
    </nav>