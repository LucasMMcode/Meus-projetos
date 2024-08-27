-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/08/2024 às 17:23
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
  `email` varchar(50) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `descrição` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamentos`
--

INSERT INTO `agendamentos` (`email`, `dia`, `hora`, `descrição`) VALUES
('lucas.m.magedanz@gmail.com', '2024-08-27', '00:09:15', 'cortar barba e cabelo'),
('lucas.m.magedanz@gmail.com', '2024-09-27', '09:15:00', 'cortar barba e cabelo'),
('lucas.m.magedanz@gmail.com', '2024-09-26', '09:15:00', 'cortar barba e cabelo'),
('lucas.m.magedanz@gmail.com', '2024-08-26', '09:15:00', 'cortar barba e cabelo'),
('lucas.m.magedanz@gmail.com', '2025-01-01', '01:58:32', 'cortar barba e cabelo'),
('lucas.m.magedanz@gmail.com', '2024-08-27', '01:58:32', 'cortar barba e cabelo'),
('lucas.m.magedanz@gmail.com', '1111-11-11', '11:11:11', 'cortar barba e cabelo');

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
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `Nome` varchar(15) NOT NULL,
  `Sobrenome` varchar(50) NOT NULL,
  `Telefone` bigint(13) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Senha` varchar(20) NOT NULL,
  `Classeid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`Nome`, `Sobrenome`, `Telefone`, `Email`, `Senha`, `Classeid`) VALUES
('b', 'b', 2, 'b@b', 'b', 2),
('c', 'cc', 3, 'c@c', 'c', 2),
('d', 'd', 4, 'd@d', 'd', 2),
('Lucas', 'Mitmann Magedanz', 5554984005750, 'lucas.m.magedanz@gmail.com', 'Lucas01lo', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD KEY `email` (`email`);

--
-- Índices de tabela `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`Classeid`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `fk_id` (`Classeid`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuario` (`Email`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`Classeid`) REFERENCES `classes` (`Classeid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
