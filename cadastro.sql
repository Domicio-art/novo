-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 03:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo` int(9) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(12) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `servico` text NOT NULL,
  `data` date NOT NULL,
  `horario` time(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `nome`, `email`, `telefone`, `sexo`, `servico`, `data`, `horario`) VALUES
(1, 'Domicio Natividade Silva', 'domicionatividade@hotmail.com', 2147483647, 'M', '', '2021-10-03', '12:00:00.00000'),
(21, 'Maria Gilvania', 'gil@gmail.com', 983321977, 'F', 'Sobrancelha', '2021-10-14', '13:00:00.00000'),
(22, 'Teste 1 ', 'teste1@teste.com', 2147483647, 'M', 'cabelo', '2021-11-12', '12:30:00.00000'),
(23, 'teste3', 'teste3@bol.com', 879564231, '', 'cabelo', '2021-10-15', '22:15:00.00000'),
(24, 'teste4', 'teste4@teste.com', 2147483647, '', 'sobrancelha', '2021-10-16', '22:20:00.00000'),
(25, 'Teste5', 'teste5@teste.com', 2147483647, 'M', 'cabelo', '2021-10-17', '09:30:00.00000'),
(26, 'teste6', 'teste6@teste.com', 987654321, 'Mas', 'cabelo', '2021-11-01', '10:00:00.00000'),
(27, 'Teste7', 'teste7@teste.com', 2147483647, 'Masculino', 'cabelo', '2021-10-20', '20:00:00.00000'),
(28, 'Felipe', 'felipe@teste.com', 96543210, 'M', 'Cabelo', '0000-00-00', '15:00:00.00000'),
(29, 'Queren', 'queren@teste.com', 987654321, 'Feminino', 'sobrancelha', '2021-10-23', '18:00:00.00000'),
(30, 'Leonardo', 'le@hotmail.com', 879564231, 'Masculino', 'cabelo', '2021-10-29', '21:30:00.00000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
