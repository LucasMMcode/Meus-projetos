-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/09/2024 às 16:31
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_barbearia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `descrição` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `idusuario`, `email`, `dia`, `hora`, `descrição`) VALUES
(1, 4, 'lucas.m.magedanz@gmail.com', '2024-08-27', '00:09:15', 'cortar barba e cabelo'),
(2, 4, 'lucas.m.magedanz@gmail.com', '2024-09-27', '09:15:00', 'cortar barba e cabelo'),
(3, 4, 'lucas.m.magedanz@gmail.com', '2024-09-26', '09:15:00', 'cortar barba e cabelo'),
(4, 4, 'lucas.m.magedanz@gmail.com', '2024-08-26', '09:15:00', 'cortar barba e cabelo'),
(5, 4, 'lucas.m.magedanz@gmail.com', '2025-01-01', '01:58:32', 'cortar barba e cabelo'),
(6, 4, 'lucas.m.magedanz@gmail.com', '2024-08-27', '01:58:32', 'cortar barba e cabelo'),
(7, 4, 'lucas.m.magedanz@gmail.com', '1111-11-11', '11:11:11', 'cortar barba e cabelo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classes`
--

CREATE TABLE `classes` (
  `Classeid` int(1) NOT NULL,
  `nome` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `classes`
--

INSERT INTO `classes` (`Classeid`, `nome`) VALUES
(1, 'ADM'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `Nome` varchar(15) NOT NULL,
  `Sobrenome` varchar(50) NOT NULL,
  `Telefone` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `Nome`, `Sobrenome`, `Telefone`) VALUES
(1, 'b', 'b', 2),
(2, 'c', 'cc', 3),
(3, 'd', 'd', 4),
(4, 'Lucas', 'Mitmann Magedanz', 5554984005750);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `Classeid` int(1) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `Classeid`, `idcliente`, `Email`, `Senha`) VALUES
(1, 2, 1, 'b@b', 'b'),
(2, 2, 2, 'c@c', 'c'),
(3, 2, 3, 'd@d', 'd'),
(4, 1, 4, 'lucas.m.magedanz@gmail.com', 'Lucas01lo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices de tabela `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`Classeid`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_id` (`Classeid`),
  ADD KEY `idcliente` (`idcliente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`Classeid`) REFERENCES `classes` (`Classeid`),
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
