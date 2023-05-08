-- Creation database et role --

CREATE DATABASE ai;
CREATE ROLE itu LOGIN password '0';
ALTER DATABASE ai OWNER TO itu;

-- Connexion --

ai

itu
0

-- Drop --

DROP TABLE Categorie CASCADE;
DROP TABLE Technologie CASCADE;
DROP TABLE article CASCADE;

-- Creation table --

CREATE TABLE Admin(
    id serial       NOT NULL,
    email varchar(30) NOT NULL,
    password varchar(32) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE Categorie(
    id serial       NOT NULL,
    intituler varchar(30) NOT NULL,
    nom varchar(70) NOT NULL,
    description text NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE Technologie(
    id serial       NOT NULL,
    nom varchar(70) NOT NULL,
    description text NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE article(
    id serial       NOT NULL,
    idAdmin int     NOT NUll,
    idCategorie int     NOT NUll,
    idTechnologie int     NOT NUll,
    nom varchar(70) NOT NULL,
    description text NOT NULL,
    photo text,
    PRIMARY KEY(id)
);

-- Foreign Key --

ALTER TABLE article ADD FOREIGN KEY(idAdmin) REFERENCES Admin(id);
ALTER TABLE article ADD FOREIGN KEY(idCategorie) REFERENCES Categorie(id);
ALTER TABLE article ADD FOREIGN KEY(idTechnologie) REFERENCES Technologie(id);

-- Insert --
INSERT INTO Admin(email,password)  VALUES ('tan.andrianif@gmail.com',md5('12345678'));


INSERT INTO Technologie(nom,description)  VALUES ('chatbots','ils utilisent le traitement du langage naturel pour communiquer avec les utilisateurs et répondre à leurs questions.');
INSERT INTO Technologie(nom,description)  VALUES ('robots','ls sont capables d interagir avec leur environnement et d effectuer des tâches physiques.');
INSERT INTO Technologie(nom,description)  VALUES ('ordinateur ','elle utilise l analyse d images pour comprendre et interpréter le contenu visuel.');
INSERT INTO Technologie(nom,description)  VALUES ('objets','elle permet à une machine de reconnaître les objets dans une image ou une vidéo.');
INSERT INTO Technologie(nom,description)  VALUES ('econnaissance faciale','elle utilise des algorithmes pour identifier les visages dans une image ou une vidéo.');
INSERT INTO Technologie(nom,description)  VALUES ('traitement du langage naturel',' il permet à une machine de comprendre et d interpréter le langage humain.');
INSERT INTO Technologie(nom,description)  VALUES ('planification de trajectoire','elle permet à une machine de planifier des trajectoires pour des robots ou des véhicules autonomes.');

INSERT INTO Categorie(intituler,nom,description)  VALUES ('Regle','Les systèmes d IA basés sur des règles','ls utilisent des règles prédéfinies pour prendre des décisions en fonction des entrées quils reçoivent.');
INSERT INTO Categorie(intituler,nom,description)  VALUES ('RNA','Les réseaux de neurones artificiels (RNA)','ils utilisent un ensemble de neurones connectés pour apprendre à partir des données et ajuster les poids des connexions pour améliorer les prédictions.');
INSERT INTO Categorie(intituler,nom,description)  VALUES ('Machine Learning','Les algorithmes d apprentissage automatique (Machine Learning) ','ils utilisent des modèles statistiques pour apprendre à partir des données et améliorer les prévisions.');
INSERT INTO Categorie(intituler,nom,description)  VALUES ('Deep Learning','Les systèmes d apprentissage profond (Deep Learning)','ils sont une sous-catégorie de l apprentissage automatique, qui utilise des réseaux de neurones profonds pour apprendre à partir de grandes quantités de données.');

-- select --
select id,idAdmin,idCategorie,idTechnologie,nom,description from article;