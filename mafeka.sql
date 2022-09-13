-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 06:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mafeka`
--
CREATE DATABASE IF NOT EXISTS `mafeka` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mafeka`;

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(4) NOT NULL,
  `nombre` varchar(37) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `descripcion` varchar(720) NOT NULL,
  `precio` int(10) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `marca`, `descripcion`, `precio`, `imagen`) VALUES
(9, 'Balón de fútbol', 'Adidas', 'Balón de fútbol Adidas Qatar 2022', 4099, 'images/productos/balon-de-futbol-adidas-mundial-qatar-2022-pro-is-H57783-1.jpg'),
(10, 'Balón Messi', 'Adidas', 'Balón de Fútbol Adidas Messi', 599, 'images/productos/IS-H57878-1.jpg'),
(11, 'Balón de Fútbol', 'Adidas', 'Balón de Futbol Adidas UCL Real Madrid Mini Pyrostrom', 349, 'images/productos/balon-de-futbol-adidas-ucl-real-madrid-mini-pyrostorm-is-GU0208-1.jpg'),
(12, 'Balón de Basketball', 'Nike', 'Balón Nike Everyday Playground', 949, 'images/productos/IS-N.100.4371.414-1.jpeg'),
(13, 'Tenis Adidas', 'Adidas', 'Tenis Adidas The Road Cycling (ciclismo)', 1799, 'images/productos/IS-H03991-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contra` varchar(400) NOT NULL,
  `vendedor` tinyint(1) NOT NULL,
  `direccion` varchar(400) NOT NULL,
  `copdigo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `contra`, `vendedor`, `direccion`, `copdigo`) VALUES
(10, 'Felipe de JEsus', 'López Delgado', 'xelipe.deje@gmail.com', '6bb417139aec1a5be62a8b176450c8ce', 1, 'Manuel M. Dieguez 25088 Saltillo', '5f7b5e91007f36b2eeaaa0d4bebdbad3'),
(11, 'adssadsadasd', 'dasdasdas', 'assadasdasd@gmail.com', 'e79528d4cdbaaf6f8ea804f478df5cf4', 0, 'efsfadas 12312 fadasdas', ''),
(12, 'MARLEN', 'ESTRADA LARA', 'emarlen893@gmail.com', '0edf1b45cd9a20f4740a60c684acd25d', 0, 'Calle maguey 25900 Ramos Arizpe', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
