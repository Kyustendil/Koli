CREATE DATABASE CarDatabase;

USE CarDatabase;

CREATE TABLE Cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    color VARCHAR(30) NOT NULL
);

-- Примерни данни:
INSERT INTO Cars (brand, model, color)
VALUES
('Toyota', 'Corolla', 'Red'),
('Honda', 'Civic', 'Blue'),
('Ford', 'Mustang', 'Black'),
('BMW', 'X5', 'White'),
('Audi', 'A4', 'Silver');
