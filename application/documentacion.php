



CREATE DATABASE `blogkitmaker` /*!40100 DEFAULT CHARACTER SET utf8 */

CREATE TABLE `users` (
 `user` varchar(128) NOT NULL,
 `pass` varchar(128) NOT NULL,
 PRIMARY KEY (`user`)
);

CREATE TABLE `articulos` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `title` varchar(128) NOT NULL,
 `slug` varchar(128) NOT NULL,
 `fecha` date NOT NULL,
 `text` text NOT NULL,
 PRIMARY KEY (`id`),
 KEY `slug` (`slug`),
 KEY `id` (`id`)
);

CREATE TABLE `comentarios` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `idArticulo` int(11) DEFAULT NULL,
 `user` varchar(128) NOT NULL DEFAULT 'anonimo',
 `fecha` date NOT NULL,
 `text` text NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `id` (`id`),
 KEY `idArticulo` (`idArticulo`),
 CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idArticulo`) REFERENCES `articulos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
);