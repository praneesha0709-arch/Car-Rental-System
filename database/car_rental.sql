CREATE DATABASE car_rental;
USE car_rental;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
phone VARCHAR(20),
password VARCHAR(255)
);

CREATE TABLE cars(
id INT AUTO_INCREMENT PRIMARY KEY,
car_name VARCHAR(100),
brand VARCHAR(100),
rent_per_day INT,
status VARCHAR(20) DEFAULT 'Available'
);

CREATE TABLE bookings(
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
car_id INT,
pickup_date DATE,
return_date DATE,
total_amount INT
);

INSERT INTO cars(car_name,brand,rent_per_day)
VALUES
('Swift','Maruti',1500),
('Creta','Hyundai',2500),
('Innova','Toyota',3500);