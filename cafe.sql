-- Create the database
CREATE DATABASE cafe_db;

-- Use the created database
USE cafe_db;

-- Create the menu table
CREATE TABLE menu (
    id INT AUTO_INCREMENT PRIMARY KEY,   -- Unique identifier for each menu item
    item_name VARCHAR(255) NOT NULL,     -- Name of the menu item
    price DECIMAL(10, 2) NOT NULL        -- Price of the menu item
);

-- Insert sample data into the menu table
INSERT INTO menu (item_name, price) VALUES 
('Coffee', 3.50),
('Tea', 2.75),
('Sandwich', 5.00),
('Cake', 4.25),
('Smoothie', 6.00);
