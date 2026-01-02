-- Database SQL Script
CREATE DATABASE IF NOT EXISTS computerforce;
USE computerforce;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    gender ENUM('male', 'female') NOT NULL,
    date_of_birth DATE NOT NULL,
    address VARCHAR(255) NOT NULL,
    suburb VARCHAR(100) NOT NULL,
    postcode VARCHAR(10) NOT NULL,
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    category VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    quantity INT DEFAULT 1,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Insert sample products
INSERT INTO products (name, category, price, description) VALUES
('Mechanical Keyboard RGB', 'Keyboards and Mice', 129.99, 'Premium mechanical keyboard with RGB lighting'),
('Wireless Gaming Mouse', 'Keyboards and Mice', 79.99, 'High precision wireless gaming mouse'),
('Adobe Creative Suite', 'Software', 599.99, 'Complete creative software package'),
('Microsoft Office 365', 'Software', 149.99, 'Annual subscription'),
('USB-C Hub', 'Peripherals', 49.99, '7-in-1 USB-C hub'),
('External SSD 1TB', 'Storage', 159.99, 'High-speed portable SSD'),
('NVIDIA RTX 4070', 'Graphics Card', 899.99, 'High-performance graphics card'),
('Laser Printer', 'Printing and Scanning', 299.99, 'Fast laser printer with scanning');
