-- Script para crear la tabla usuarios con sus modificaciones solicitadas y cargar tres usuarios por defecto. 

CREATE TABLE `usuarios` (
  `id` int primary key auto_increment, 
  `apellido` varchar(100) NOT NULL DEFAULT '',
  `fecha` date
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios`(`apellido`, `fecha`) VALUES ('Vernizzi', '1970-11-13')
INSERT INTO `usuarios`(`apellido`, `fecha`) VALUES ('Nuñez', '1998-10-16')
INSERT INTO `usuarios`(`apellido`, `fecha`) VALUES ('Rodriguez', '2000-05-31')
