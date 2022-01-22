create table IF NOT EXISTS Article_comments(
    comment_id	INT PRIMARY KEY AUTO_INCREMENT,
    comment_text TEXT,
    comment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    user_id int,
    article_id int,
    FOREIGN KEY (user_id)
        REFERENCES Users(user_id)
        ON DELETE CASCADE,
    FOREIGN KEY (article_id)
        REFERENCES Articles(article_id)
        ON DELETE CASCADE);