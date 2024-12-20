-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/11/2024 às 20:10
-- Versão do servidor: 8.0.17
-- Versão do PHP: 8.2.12

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
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` bigint(15) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `cortes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `idusuario`, `nome`, `telefone`, `dia`, `hora`, `cortes`) VALUES
(1, 1, 'Lucas Mitmann Magedanz', 54984005750, '2024-11-21', '11:00:00', 'cabelo'),
(2, 3, 'Cristiano Geiger', 54991898755, '2024-11-21', '10:30:00', 'cabelo'),
(3, 4, 'Jaqueline Magedanz', 54984012144, '2024-11-23', '08:00:00', ' barba');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoriausuario`
--

CREATE TABLE `categoriausuario` (
  `idcategoria` int(1) NOT NULL,
  `nome` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoriausuario`
--

INSERT INTO `categoriausuario` (`idcategoria`, `nome`) VALUES
(1, 'Funcionario'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `nome` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `sobrenome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `idusuario`, `nome`, `sobrenome`, `telefone`) VALUES
(1, 2, 'Isabelle', 'Milesi', 54996789571),
(2, 3, 'Cristiano', 'Geiger', 54991898755),
(3, 4, 'Jaqueline', 'Magedanz', 54984012144);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `idfuncionario` int(10) NOT NULL,
  `idusuario` int(10) NOT NULL,
  `nome` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `sobrenome` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idfuncionario`, `idusuario`, `nome`, `sobrenome`, `telefone`) VALUES
(1, 1, 'Lucas', 'Mitmann Magedanz', 54984005750);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `IdProduto` int(11) NOT NULL,
  `Nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Preco` char(6) COLLATE utf8mb4_general_ci NOT NULL,
  `Caminhoimg` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Existe` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`IdProduto`, `Nome`, `Preco`, `Caminhoimg`, `Existe`) VALUES
(1, 'Produtos', '22,22', 'produtos.png', 1),
(2, 'Shampoo Cevada', '44,44', 'shampoocevadagold.png', 1),
(3, 'Shampoo QOD', '66,66', 'shampoqod.png', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `idcategoria` int(1) NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `idcategoria`, `email`, `senha`) VALUES
(1, 1, 'lucas.m.magedanz@gmail.com', 'Lucas01lo'),
(2, 2, 'bellepmilesi@gmail.com', 'SempreDigo112'),
(3, 2, 'crisgeiger@gmail.com', 'barbearia'),
(4, 2, 'jaqueline.magedanz@gmail.com', '2605');

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
-- Índices de tabela `categoriausuario`
--
ALTER TABLE `categoriausuario`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`idfuncionario`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`IdProduto`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_id` (`idcategoria`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `idfuncionario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `IdProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Restrições para tabelas `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Restrições para tabelas `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`idcategoria`) REFERENCES `categoriausuario` (`idcategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
