create table IF NOT EXISTS Users(
    user_id	INT PRIMARY KEY AUTO_INCREMENT,
    user_name	VARCHAR(50),
    user_email	VARCHAR(30),
    user_password	VARCHAR(10),
    role_id int,
    FOREIGN KEY (role_id)
        REFERENCES Roles(role_id)
        ON DELETE CASCADE);