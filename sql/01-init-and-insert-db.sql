DROP DATABASE IF EXISTS mon_app_db;

CREATE DATABASE IF NOT EXISTS mon_app_db;
USE mon_app_db;

CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description TEXT,
    prix DECIMAL(10,2) NOT NULL,
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES
('Alice Dupont', 'alice@example.com', 'motdepasse1'),
('Bob Martin', 'bob@example.com', 'motdepasse2'),
('Charlie Durand', 'charlie@example.com', 'motdepasse3');

INSERT INTO produits (nom, description, prix) VALUES
('Ordinateur portable', 'Un PC performant pour le travail', 999.99),
('Smartphone', 'Un téléphone dernier cri', 699.99),
('Casque audio', 'Un casque avec réduction de bruit', 199.99);
