CREATE TABLE season (
    id INT PRIMARY KEY AUTO INCREMENT,
    name VARCHAR(50),
    year YEAR,
    season INT
)

CREATE TABLE status (
    id INT PRIMARY KEY AUTO INCREMENT,
    name VARCHAR(50),
    value VARCHAR(10),
    code CHAR(1),
    season INT REFERENCES season.id,
    user INT REFERENCES user.id
)

CREATE TABLE user (
    id INT PRIMARY KEY AUTO INCREMENT,
    name VARCHAR(50)
)

