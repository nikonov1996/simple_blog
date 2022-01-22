create table IF NOT EXISTS Articles(
    article_id	INT PRIMARY KEY AUTO_INCREMENT,
    article_name    VARCHAR(100),
    article_description TEXT,
    article_text TEXT,
    article_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    author_id int,
    FOREIGN KEY (author_id)
        REFERENCES Users(user_id)
        ON DELETE CASCADE);