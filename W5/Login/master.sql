-- Create Database
CREATE DATABASE IF NOT EXISTS school_portal;
USE school_portal;

-- Create Table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    fullName VARCHAR(100) NOT NULL,
    icNumber VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Seed Data (Password is p@ssword123)
INSERT INTO users (username, fullName, icNumber, password) VALUES 
('ali_top', 'Ali Bin Ahmad', '120514-13-5541', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),
('siti.stars', 'Siti Nurhaliza', '121020-01-6652', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),
('cyber_king', 'Tan Ah Hock', '120101-14-7789', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');