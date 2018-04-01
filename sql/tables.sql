/**
 * Todas las tablas van aquí.
 */

CREATE TABLE `ejmeenet_blog`.`wp_publication_type` (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50),
	created TIMESTAMP DEFAULT   CURRENT_TIMESTAMP
);

CREATE TABLE `ejmeenet_blog`.`wp_properties` (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_publication_type INT(6) NOT NULL,
	id_property_type INT(6) NOT NULL,
	id_seller INT(6) NOT NULL,
	title VARCHAR(100) NOT NULL,
	address VARCHAR(100) NOT NULL, 
	departament VARCHAR(100) NOT NULL,
	province VARCHAR(100) NOT NULL,
	district VARCHAR(100) NOT NULL,
	area VARCHAR(100) NOT NULL,
	latitude FLOAT,
	longitude FLOAT,
	url_video VARCHAR(100),
	description TEXT NOT NULL,
	enterprice_name VARCHAR(100),
	currency VARCHAR (1) NOT NULL,
	price FLOAT NOT NULL,
	created TIMESTAMP DEFAULT   CURRENT_TIMESTAMP
);

CREATE TABLE `ejmeenet_blog`.`wp_types_resource` (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `ejmeenet_blog`.`wp_property_resource` (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_property INT(6) NOT NULL,
	id_type_resource INT(6) NOT NULL,
	name VARCHAR(100),
	url_path VARCHAR(100),
	created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE `ejmeenet_blog`.`wp_destacado_property` (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_destacado INT(6) NOT NULL,
	id_property INT(6) NOT NULL
);

CREATE TABLE `ejmeenet_blog`.`wp_destacado` (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	position INT(6) NOT NULL
);

CREATE TABLE `ejmeenet_blog`.`wp_users_sellers` (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	phone VARCHAR(100) NOT NULL,
	created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `ejmeenet_blog`.`wp_property_types` (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50) NOT NULL,
	created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);