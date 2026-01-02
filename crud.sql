--Step 1: database creation
CREATE DATABASE phpCrud;

-- Step 2: Creating table
USE phpCrud;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Step 3: Inserting data directly 
USE phpCrud;
INSERT INTO users (name, email, phone) VALUES 
('Jennie', 'jennie@example.com', '1234567890'),
('Rose', 'rose@example.com', '0987654321');
