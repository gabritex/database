-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Abr-2018 às 11:42
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `suites`
--

CREATE TABLE `suites` (
  `id` int(11) NOT NULL,
  `nome` varchar(222) NOT NULL,
  `telefone` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `morada` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `suites`
--

INSERT INTO `suites` (`id`, `nome`, `telefone`, `email`, `morada`) VALUES
(1, 'sergio', '967623717', 'sergioferraz96@hotmail.com', 'Cabeceiras de Basto'),
(10, 'Ana Isabel', '969999922', 'ana@hotmail.com', 'Braga'),
(12, 'Ana Maria', '967627123', 'anamaria@outlook.com', 'Porto'),
(24, 'Alberto', '967623717', 'alberto@hotmail.com', 'Cabeceiras de Basto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `suites2`
--

CREATE TABLE `suites2` (
  `id` int(11) NOT NULL,
  `entrada` date NOT NULL,
  `pronto` date NOT NULL,
  `saida` date NOT NULL,
  `marca` varchar(222) NOT NULL,
  `modelo` varchar(222) NOT NULL,
  `operadora` varchar(222) NOT NULL,
  `seria` varchar(222) NOT NULL,
  `desbloqueio` varchar(222) NOT NULL,
  `acessorios` varchar(222) NOT NULL,
  `reclamacao` text NOT NULL,
  `nome` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `suites2`
--

INSERT INTO `suites2` (`id`, `entrada`, `pronto`, `saida`, `marca`, `modelo`, `operadora`, `seria`, `desbloqueio`, `acessorios`, `reclamacao`, `nome`) VALUES
(1, '2018-04-04', '2018-04-19', '0000-00-00', 'z', 'z', 'z', '', '3432', 'fones', 'Vidro partido ', 'sergio'),
(3, '2018-04-16', '0000-00-00', '0000-00-00', 'Samsung', 's7', 'nos', '---', '1234', 'Nada', 'Troca de bateria', 'Alberto'),
(11, '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 'Alberto'),
(13, '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 'Alberto'),
(14, '2018-04-18', '0000-00-00', '0000-00-00', 'fdssdf', 'adsasd', 'asdasd', '', '12345', 'n', 'wwww', 'JoÃ£o'),
(15, '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', ''),
(17, '2018-04-18', '0000-00-00', '0000-00-00', 'Samsung', 's7', 'nos', '---', '6786r', 'Nada', 'Troca de bateria', 'JoÃ£o'),
(18, '0000-00-00', '0000-00-00', '0000-00-00', 'Samsung', 'S9', '', '', '', '', '', ''),
(19, '2018-04-18', '0000-00-00', '0000-00-00', 'Samsung', 's9', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suites`
--
ALTER TABLE `suites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suites2`
--
ALTER TABLE `suites2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suites`
--
ALTER TABLE `suites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `suites2`
--
ALTER TABLE `suites2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
