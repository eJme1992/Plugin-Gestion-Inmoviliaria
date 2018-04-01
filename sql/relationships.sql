/**
 * Toda relación va aquí.
 */

ALTER TABLE `ejmeenet_blog`.`wp_properties`
ADD CONSTRAINT `fk_publication_type` FOREIGN KEY (`id_publication_type`)
REFERENCES `ejmeenet_blog`.`wp_publication_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `ejmeenet_blog`.`wp_properties`
ADD CONSTRAINT `fk_property_type` FOREIGN KEY (`id_property_type`)
REFERENCES `ejmeenet_blog`.`wp_property_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `ejmeenet_blog`.`wp_property_resource`
ADD CONSTRAINT `fk_property` FOREIGN KEY (`id_property`)
REFERENCES `ejmeenet_blog`.`wp_properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `ejmeenet_blog`.`wp_property_resource`
ADD CONSTRAINT `fk_type_resource` FOREIGN KEY (`id_type_resource`)
REFERENCES `ejmeenet_blog`.`wp_types_resource` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `ejmeenet_blog`.`wp_destacado_property`
ADD CONSTRAINT `fk_property` FOREIGN KEY (`id_property`)
REFERENCES `ejmeenet_blog`.`wp_properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `ejmeenet_blog`.`wp_destacado_property`
ADD CONSTRAINT `fk_destacado` FOREIGN KEY (`id_destacado`)
REFERENCES `ejmeenet_blog`.`wp_destacado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `ejmeenet_blog`.`wp_properties`
ADD CONSTRAINT `fk_user_seller` FOREIGN KEY (`id_seller`)
REFERENCES `ejmeenet_blog`.`wp_users_sellers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
