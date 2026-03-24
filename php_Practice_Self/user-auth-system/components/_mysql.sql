-- Create the database
CREATE DATABASE IF NOT EXISTS `users`;
USE `users`;

-- Create the users table
CREATE TABLE `user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `fullname` VARCHAR(100) NOT NULL,
  `fathername` VARCHAR(100) NOT NULL,
  `mothername` VARCHAR(100) NOT NULL,
  `dob` DATE NOT NULL,
  `passwordSign` VARCHAR(255) NOT NULL, 
  `address` TEXT NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- Sample Insert Statement
INSERT INTO `user` (
  `username`, 
  `full_name`, 
  `father_name`, 
  `mother_name`, 
  `date_of_birth`, 
  `password`, 
  `address`
) VALUES (
  'johndoe88', 
  'John Doe', 
  'Robert Doe', 
  'Mary Doe', 
  '1995-05-15', 
  '$2y$10$abcdefghijklmnopqrstuv', -- Use password_hash() in PHP
  '123 Main St, Mumbai, Maharashtra'
);