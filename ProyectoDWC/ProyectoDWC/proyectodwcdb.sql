-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `es_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: No es admin, 1: Es admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`, `es_admin`) VALUES
(30, 'Jairo', 'Jairo', 'Jairo', '7ad2e116c222f795e1995f8e834d579f93dfa9f465cabc8d4563568af04d94e40ea7a8c2a27a5af0ef0bc8490d5f07b85d56c1700d1884d2f4726d4a109d1683', 0),
(31, '', '', '', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e', 0),
(32, 'Jairo Goat', 'jairosg03@gmasifa', 'Paco', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 0),
(33, 'Jairo Martibnez', 'Paco Pacony', 'ALFREDO', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 1);

ALTER TABLE `usuarios` DROP PRIMARY KEY;

-- Luego, redefine la columna `id` como clave primaria y autoincremental
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  ADD PRIMARY KEY (`id`),
  AUTO_INCREMENT=34;


CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `productos` (`nombre`, `precio`, `imagen`) VALUES
('Nike Low Vis', 89.99, 'imagen1.jpg'),
('Nike Air Max', 69.99, 'imagen2.jpg'),
('Nike Vapor Max', 99.99, 'imagen3.jpg'),
('Nike Air Force 1', 109.99, 'imagen4.jpg'),
('Nike Air Jordan', 89.99, 'imagen5.jpg'),
('Nike Huarache', 69.99, 'imagen6.jpg');

