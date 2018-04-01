SELECT
	a.id AS `idPropiedad`,
	a.id_publication_type AS `idTipoPublicacion`,
	a.title AS `titulo`,
	a.address AS `direccion`,
	a.departament AS `departamento`,
	a.province AS `provincia`,
	a.district AS `distrito`,
	a.area AS `area`,
	a.latitude AS `latitud`,
	a.longitude AS `longitud`,
	a.email AS `email`,
	a.description AS `descripcion`,
	a.phone AS `telefono`,
	CONCAT(a.price, ' ', a.currency) AS `precio`,
	a.created AS `fechaCreacion`,
	(SELECT CONCAT('[',
	GROUP_CONCAT(JSON_OBJECT(
	'idRecurso', a.id,
	'idPropiedad', a.id_property,
	'idTipoDeRecurso', a.id_type_resource,
	'nombreDeRecurso', a.name,
	'urlRecurso', a.url_path,
	'fechaDeCreacion', a.created)),
	']') FROM `wordpress`.`wp_property_resource` a
	LEFT OUTER JOIN `wordpress`.`wp_properties` b
	ON b.id = a.id_property
	WHERE a.id_property = 1) AS `recursos`
FROM `wordpress`.`wp_properties` a WHERE a.id = 1;

SELECT
	a.id AS `idPropiedad`,
	a.title AS `titulo`
FROM `wordpress`.`wp_properties` a;


-- Inmuebles que estan destacados.

SELECT
	a.id AS `idPropiedad`,
	a.id_publication_type AS `idTipoPublicacion`,
	a.title AS `titulo`,
	a.address AS `direccion`,
	a.departament AS `departamento`,
	a.province AS `provincia`,
	a.district AS `distrito`,
	a.area AS `area`,
	a.latitude AS `latitud`,
	a.longitude AS `longitud`,
	a.email AS `email`,
	a.description AS `descripcion`,
	a.phone AS `telefono`,
	CONCAT(a.price, ' ', a.currency) AS `precio`,
	a.created AS `fechaCreacion`
FROM `wordpress`.`wp_properties` a
	INNER JOIN `wordpress`.`wp_destacado_property` b
		ON a.id = b.id_property
	INNER JOIN `wordpress`.`wp_destacado` c
		ON b.id_destacado = c.id;


--


SELECT
	a.id AS `idPropiedad`,
	a.title AS `titulo`
FROM `wordpress`.`wp_properties` a
	INNER JOIN `wordpress`.`wp_destacado_property` B
		ON a.id = b.id_property
	INNER JOIN `wordpress`.`wp_destacado` c
		ON b.id_destacado = c.id
			WHERE a.id NOT IN (3,4);



SELECT
	a.id AS `idPropiedad`,
	a.id_publication_type AS `idTipoPublicacion`,
	a.title AS `titulo`,
	a.address AS `direccion`,
	a.departament AS `departamento`,
	a.province AS `provincia`,
	a.district AS `distrito`,
	a.area AS `area`,
	a.latitude AS `latitud`,
	a.longitude AS `longitud`,
	a.email AS `email`,
	a.description AS `descripcion`,
	a.phone AS `telefono`,
	CONCAT(a.price, ' ', a.currency) AS `precio`,
	a.created AS `fechaCreacion`
FROM `wordpress`.`wp_properties` a
	INNER JOIN `wordpress`.`wp_destacado_property` b
		ON a.id = b.id_property
	INNER JOIN `wordpress`.`wp_destacado` c
		ON b.id_destacado = c.id;




-- ij
SELECT
	a.id AS `idDestacado`,
	a.position AS `posicion`,
	c.title AS `titulo`
FROM `ejmeenet_blog`.`wp_destacado` a
	INNER JOIN `ejmeenet_blog`.`wp_destacado_property` b
		ON a.id = b.id_destacado
	INNER JOIN `ejmeenet_blog`.`wp_properties` c
		ON b.id_property = c.id
		
	