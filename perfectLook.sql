-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/12/2023 às 21:49
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `perfectlook`
--
CREATE DATABASE IF NOT EXISTS `perfectlook` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `perfectlook`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `conta`
--

CREATE TABLE `conta` (
  `codconta` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `conta`
--

INSERT INTO `conta` (`codconta`, `usuario`, `senha`, `celular`) VALUES
(1, 'a', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '(55) 99954-6456'),
(2, 'b', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '(55) 99934-3433'),
(3, 'marco', '8cb2237d0679ca88db6464eac60da96345513964', ''),
(4, 'bibiana', 'a703c359c2ce601c7a5b72b6c737af44f06f29b9', '(55) 99999-9999');

-- --------------------------------------------------------

--
-- Estrutura para tabela `roupa`
--

CREATE TABLE `roupa` (
  `codroupa` int(11) NOT NULL,
  `peca` varchar(50) NOT NULL,
  `tamanho` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `preco` text NOT NULL,
  `codigoU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `roupa`
--

INSERT INTO `roupa` (`codroupa`, `peca`, `tamanho`, `cor`, `preco`, `codigoU`) VALUES
(2, 'manga curta', 'GG', '#dd3636', 'R$ 2,50', 2),
(5, 'camiseta', 'G', '#cd0e0e', 'R$ 20,00', 3),
(6, 'vestido', '2G', '#ffd6d6', 'R$ 100,00', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`codconta`);

--
-- Índices de tabela `roupa`
--
ALTER TABLE `roupa`
  ADD PRIMARY KEY (`codroupa`),
  ADD KEY `codconta` (`codigoU`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conta`
--
ALTER TABLE `conta`
  MODIFY `codconta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `roupa`
--
ALTER TABLE `roupa`
  MODIFY `codroupa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `roupa`
--
ALTER TABLE `roupa`
  ADD CONSTRAINT `codconta` FOREIGN KEY (`codigoU`) REFERENCES `conta` (`codconta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
