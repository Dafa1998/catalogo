/*
Navicat MySQL Data Transfer

Source Server         : Mi Conexion Personal
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : catalogo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-06-01 21:32:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_categoria
-- ----------------------------
DROP TABLE IF EXISTS `tbl_categoria`;
CREATE TABLE `tbl_categoria` (
  `id_categoria` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `eliminado` varchar(1) COLLATE utf8_spanish_ci DEFAULT 'N',
  PRIMARY KEY (`id_categoria`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of tbl_categoria
-- ----------------------------
INSERT INTO `tbl_categoria` VALUES ('1', 'calzado', 'zapatos de marca', 'N');
INSERT INTO `tbl_categoria` VALUES ('2', 'alimentos', 'comida para todos', 'N');
INSERT INTO `tbl_categoria` VALUES ('3', 'Films', 'Peliculas para todos xxx', 'N');

-- ----------------------------
-- Table structure for tbl_empresa
-- ----------------------------
DROP TABLE IF EXISTS `tbl_empresa`;
CREATE TABLE `tbl_empresa` (
  `id_empresa` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url_foto` varchar(150) COLLATE utf8_spanish_ci DEFAULT 'img.jpg',
  `direccion` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo_electronico` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_categoria` int(11) unsigned DEFAULT NULL,
  `eliminado` varchar(1) COLLATE utf8_spanish_ci DEFAULT 'N',
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of tbl_empresa
-- ----------------------------
INSERT INTO `tbl_empresa` VALUES ('10', 'Adoc', '<p>Empresa destinada a vender items de vestimenta</p><p><strong>zapatos, camisas, condones y riñones</strong></p>', 'img_5b0eeb12b849e0.48788324.jpg', 'san miguel', 'adoc@gmail.com', '12345678', '1', 'N');

-- ----------------------------
-- Table structure for tbl_roles
-- ----------------------------
DROP TABLE IF EXISTS `tbl_roles`;
CREATE TABLE `tbl_roles` (
  `id_rol` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `eliminado` varchar(1) COLLATE utf8_spanish_ci DEFAULT 'N',
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of tbl_roles
-- ----------------------------
INSERT INTO `tbl_roles` VALUES ('1', 'admin', 'N');
INSERT INTO `tbl_roles` VALUES ('2', 'user', 'N');

-- ----------------------------
-- Table structure for tbl_usuarios
-- ----------------------------
DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo_electronico` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contraseña` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `eliminado` varchar(1) COLLATE utf8_spanish_ci DEFAULT 'N',
  `id_rol` int(11) DEFAULT '2',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of tbl_usuarios
-- ----------------------------
INSERT INTO `tbl_usuarios` VALUES ('2', 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'N', '1');
INSERT INTO `tbl_usuarios` VALUES ('3', 'user', 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'N', '2');
INSERT INTO `tbl_usuarios` VALUES ('11', 'user2', 'user2', 'user2@gmail.com', '7e58d63b60197ceb55a1c487989a3720', 'N', '2');
INSERT INTO `tbl_usuarios` VALUES ('12', 'user3', 'user3', 'user3@gmail.com', '92877af70a45fd6a2ed7fe81e1236b78', 'N', '2');
INSERT INTO `tbl_usuarios` VALUES ('14', 'user4', 'user4', 'user4@gmail.com', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 'N', '2');
INSERT INTO `tbl_usuarios` VALUES ('15', 'user5', 'user5', 'user5@gmai.com', '0a791842f52a0acfbb3a783378c066b8', 'N', '2');
INSERT INTO `tbl_usuarios` VALUES ('16', 'user6', 'user6', 'user6@gmail.com', 'affec3b64cf90492377a8114c86fc093', 'N', '2');
INSERT INTO `tbl_usuarios` VALUES ('17', 'Supremo', 'Alonsito', 'supremo@gmail.com', 'f099765e56d468ea1458efd93a4b068f', 'N', '2');

-- ----------------------------
-- View structure for vta_empresa
-- ----------------------------
DROP VIEW IF EXISTS `vta_empresa`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `vta_empresa` AS SELECT
tbl_empresa.id_empresa,
tbl_empresa.nombre_empresa,
tbl_empresa.descripcion,
tbl_empresa.url_foto,
tbl_empresa.direccion,
tbl_empresa.correo_electronico,
tbl_empresa.telefono,
tbl_empresa.id_categoria,
tbl_categoria.categoria
FROM
tbl_categoria
INNER JOIN tbl_empresa ON tbl_empresa.id_categoria = tbl_categoria.id_categoria ;

-- ----------------------------
-- View structure for vta_role
-- ----------------------------
DROP VIEW IF EXISTS `vta_role`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `vta_role` AS SELECT
tbl_usuarios.nombres,
tbl_usuarios.apellidos,
tbl_usuarios.correo_electronico,
tbl_usuarios.`contraseña`,
tbl_roles.nombre_rol,
tbl_usuarios.id_rol
FROM
tbl_usuarios
INNER JOIN tbl_roles ON tbl_usuarios.id_rol = tbl_roles.id_rol ;
