-- Initialisation de la base de données

DROP DATABASE IF EXISTS proconnect;
CREATE DATABASE proconnect CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE proconnect;

-- Création des différentes tables

CREATE TABLE user(
   id_user INT AUTO_INCREMENT PRIMARY KEY,
   email VARCHAR(255) NOT NULL,
   password VARCHAR(255) NOT NULL,
   role VARCHAR(20) NOT NULL,
   phone VARCHAR(15) NOT NULL,
   city VARCHAR(100) NOT NULL,
   postal_code CHAR(5) NOT NULL,
   photo_profil VARCHAR(255),
   note_moyenne DECIMAL(3,2),
   UNIQUE(email),
   UNIQUE(phone)
);

CREATE TABLE particulier(
   id_particulier INT PRIMARY KEY,
   name VARCHAR(50) NOT NULL,
   surname VARCHAR(50) NOT NULL,
   birth_date DATE NOT NULL,
   FOREIGN KEY(id_particulier) REFERENCES user(id_user) ON DELETE CASCADE
);

CREATE TABLE professionnel(
   id_professionnel INT PRIMARY KEY,
   company_name VARCHAR(255) NOT NULL,
   num_siret CHAR(14) NOT NULL,
   price_moy SMALLINT NOT NULL,
   description TEXT NOT NULL,
   UNIQUE(company_name),
   UNIQUE(num_siret),
   FOREIGN KEY(id_professionnel) REFERENCES user(id_user) ON DELETE CASCADE
);

CREATE TABLE match_(
   id_match INT AUTO_INCREMENT PRIMARY KEY,
   status VARCHAR(20) NOT NULL,
   date_demande DATETIME NOT NULL,
   id_demandeur INT NOT NULL,
   id_receveur INT NOT NULL,
   FOREIGN KEY(id_demandeur) REFERENCES user(id_user) ON DELETE CASCADE,
   FOREIGN KEY(id_receveur) REFERENCES user(id_user) ON DELETE CASCADE
);
