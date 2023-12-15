

CREATE TABLE _user(
   id INT,
   email VARCHAR(50) NOT NULL,
   rôle VARCHAR(50) NOT NULL,
   password VARCHAR(50) NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE patient(
   id INT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   adresse VARCHAR(50),
   telephone VARCHAR(50),
   PRIMARY KEY(id),
   FOREIGN KEY(id) REFERENCES _user(id)
);

CREATE TABLE secretaire(
   id INT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   telephone VARCHAR(50),
   PRIMARY KEY(id),
   FOREIGN KEY(id) REFERENCES _user(id)
);

CREATE TABLE laborantin(
   id INT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   telephone VARCHAR(50),
   PRIMARY KEY(id),
   FOREIGN KEY(id) REFERENCES _user(id)
);

CREATE TABLE RendezVous(
   identifiant INT,
   _date DATE,
   heure TIME,
   motif VARCHAR(50),
   id INT,
   PRIMARY KEY(identifiant),
   FOREIGN KEY(id) REFERENCES patient(id)
);

CREATE TABLE analyse(
   identifiant INT,
   nom VARCHAR(50) NOT NULL,
   type VARCHAR(50),
   _date DATE,
   PRIMARY KEY(identifiant)
);

CREATE TABLE resultat(
   identifiant INT,
   resultat VARCHAR(50) NOT NULL,
   identifiant_1 INT NOT NULL,
   PRIMARY KEY(identifiant),
   FOREIGN KEY(identifiant_1) REFERENCES analyse(identifiant)
);

CREATE TABLE faire(
   id INT,
   identifiant INT,
   PRIMARY KEY(id, identifiant),
   FOREIGN KEY(id) REFERENCES patient(id),
   FOREIGN KEY(identifiant) REFERENCES analyse(identifiant)
);

CREATE TABLE saisir(
   id INT,
   identifiant INT,
   PRIMARY KEY(id, identifiant),
   FOREIGN KEY(id) REFERENCES laborantin(id),
   FOREIGN KEY(identifiant) REFERENCES resultat(identifiant)
);

CREATE TABLE ajouter(
   id INT,
   identifiant INT,
   PRIMARY KEY(id, identifiant),
   FOREIGN KEY(id) REFERENCES secretaire(id),
   FOREIGN KEY(identifiant) REFERENCES analyse(identifiant)
);

/*
CREATE TABLE patient(
   id INT,
   nom VARCHAR(50) NOT NULL,
   PRENOM VARCHAR(50) NOT NULL,
   adresse VARCHAR(50),
   email VARCHAR(50),
   telephone VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE rendezVous(
   id INT,
   motif VARCHAR(50),
   id_1 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES patient(id)
);

CREATE TABLE secretaire(
   id INT,
   nom VARCHAR(50) NOT NULL,
   PRENOM VARCHAR(50) NOT NULL,
   adresse VARCHAR(50),
   email VARCHAR(50),
   telephone VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE laborantin(
   id INT,
   nom VARCHAR(50) NOT NULL,
   PRENOM VARCHAR(50) NOT NULL,
   adresse VARCHAR(50),
   email VARCHAR(50),
   telephone VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE analyses(
   id INT,
   nom VARCHAR(50) NOT NULL,
   type VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE creneau(
   id INT,
   _date DATETIME,
   id_1 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES secretaire(id)
);

CREATE TABLE resultat(
   id INT,
   RESULTAT VARCHAR(50) NOT NULL,
   id_1 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES analyses(id)
);

CREATE TABLE saisir(
   id INT,
   id_1 INT,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES secretaire(id),
   FOREIGN KEY(id_1) REFERENCES analyses(id)
);

CREATE TABLE ecrire(
   id INT,
   id_1 INT,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES laborantin(id),
   FOREIGN KEY(id_1) REFERENCES resultat(id)
);

CREATE TABLE faire(
   id INT,
   id_1 INT,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES patient(id),
   FOREIGN KEY(id_1) REFERENCES analyses(id)
);

*/
