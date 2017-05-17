-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2017 às 04:25
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creatd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso_adm`
--

CREATE TABLE `acesso_adm` (
  `id_adm` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` char(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso_adm`
--

INSERT INTO `acesso_adm` (`id_adm`, `email`, `senha`) VALUES
(1, 'admin@admin.com', '12345678');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor_base` int(11) NOT NULL,
  `pergunta1` varchar(100) NOT NULL DEFAULT 'Null',
  `pergunta2` varchar(100) NOT NULL DEFAULT 'Null',
  `pergunta3` varchar(100) NOT NULL DEFAULT 'Null',
  `pergunta4` varchar(100) DEFAULT 'Null',
  `pergunta5` varchar(100) NOT NULL DEFAULT 'Null',
  `opcao1` varchar(100) NOT NULL DEFAULT 'Null',
  `opcao2` varchar(100) NOT NULL DEFAULT 'Null',
  `opcao3` varchar(100) NOT NULL DEFAULT 'Null',
  `opcao4` varchar(100) NOT NULL DEFAULT 'Null',
  `opcao5` varchar(100) NOT NULL DEFAULT 'Null'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso_adm`
--
ALTER TABLE `acesso_adm`
  ADD PRIMARY KEY (`id_adm`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `pergunta2` (`pergunta2`),
  ADD UNIQUE KEY `pergunta1` (`pergunta1`),
  ADD UNIQUE KEY `pergunta3` (`pergunta3`),
  ADD UNIQUE KEY `pergunta5` (`pergunta5`),
  ADD UNIQUE KEY `pergunta4` (`pergunta4`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acesso_adm`
--
ALTER TABLE `acesso_adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
