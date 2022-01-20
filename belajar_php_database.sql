create table customers(
    id VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)

    )ENGINE = InnoDB;

SHOW TABLES;

SELECT * FROM customers

create table admin(
    username VARCHAR(100) NOT NULL ,
    password VARCHAR(100) NOT NULL ,
    PRIMARY KEY (username)
)ENGINE = InnoDB;

SELECT * FROM admin

INSERT INTO admin(username,password) VALUES ('admin', 'admin')


create table comments(
    id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL ,
    comments TEXT,
    PRIMARY KEY (id)
) ENGINE = InnoDB;

SELECT * FROM comments;
