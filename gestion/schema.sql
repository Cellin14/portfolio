CREATE DATABASE gestion_employes CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE gestion_employes;
CREATE TABLE employes (id INT AUTO_INCREMENT PRIMARY KEY, matricule VARCHAR(50) NOT NULL UNIQUE, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, poste VARCHAR(150) NOT NULL, salaire DECIMAL(12,2) NOT NULL, date_embauche DATE NOT NULL);
CREATE TABLE presences (id INT AUTO_INCREMENT PRIMARY KEY, employe_id INT NOT NULL, date_jour DATE NOT NULL, statut ENUM('present','absent') NOT NULL, UNIQUE KEY unique_presence(employe_id,date_jour), FOREIGN KEY (employe_id) REFERENCES employes(id) ON DELETE CASCADE);
