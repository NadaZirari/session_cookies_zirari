CREATE DATABASE cookies_session;

USE cookies_session;

CREATE TABLE SC(
    id_SC INT PRIMARY KEY AUTO_INCREMENT,
    nom_SC VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL
);

INSERT INTO SC (nom_SC,password) VALUES ("nadaa","nadaa");