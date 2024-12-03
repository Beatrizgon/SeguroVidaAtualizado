-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03/12/2024 às 17:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `careup_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `datanasci` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `plano` varchar(50) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `datanasci`, `email`, `telefone`, `plano`, `senha`) VALUES
(1, '', NULL, 'yhuribld@gmail.com', '21968250914', '', '$2y$10$QQR0TTI0fmYoTLKPqI2SxOMq/3RgVbDH9jUc/DVF17x'),
(6, 'Bolinhoteste', NULL, 'teste@gmail.com', '21983219013', 'Básico', '$2y$10$rpezTuV0MI3niRfONEKzr.TJQ44gmYALTq4T8syxqvG'),
(10, 'teste', NULL, 'teste1@gmail.com', '21983219013', 'Top', '$2y$10$pOWhTd1vqnD5ueu5HDcJDOC38knxSzpN4PvN5TLSA1U'),
(11, 'teste', NULL, 'teste2@gmail.com', '21983219013', 'Básico', '$2y$10$D39qxUscaUn38XK6cvIGCOV2GAD/CNqI9JVHVgts5im'),
(13, 'beatriz', '2006-02-06', 'biateste@gmail.com', '21983219013', 'Básico', '$2y$10$9AeGxO09aGTUZRnsGOELSuDGbreSU/egG.r7TXfIUEA'),
(15, 'Roberta', '2000-03-20', 'roberta123@gmail.com', '21970820055', 'Premium', '$2y$10$bnjGDP5PKCEzMAwHdJUm3e8TbjXWRLV3DIDS7eCMXDT'),
(16, 'Roberta', '2000-03-20', 'bolinho@gmail.com', '21970820055', 'Premium', '$2y$10$27LnDtgunZr0QoBHIbFEZe3rBnoZqNc4rY8ri6xeAWA'),
(17, 'Roberta Fernandes Oliveira Felippe', '2000-03-20', 'robertafernandes500@gmail.com', '21970820055', 'Básico', '$2y$10$setGgaYLsbVgJ.UePmgaM.4gv93GonqNisdpJLEM4vd'),
(18, 'Roberta Fernandes Oliveira Felippe', '2000-03-20', 'robertafernandes6000@gmail.com', '21970820055', 'Básico', '$2y$10$s0FktsW7A/nCzOeM/DPG..9sAvWbmzpLx4X.P43YF1a'),
(19, 'Roberta Fernandes Oliveira Felippe', '2000-03-20', 'robertafernandes700@gmail.com', '21970820055', 'Básico', '$2y$10$wIouRHQ3UyJpr97KcBMcl.e.IfdsfE2O.f2YtTR3MhO'),
(20, 'Roberta Fernandes Oliveira Felippe', '2000-03-20', 'robertafernandes100@gmail.com', '21970820055', 'Básico', '$2y$10$NIxxv/uNayxeOFy/Qsu77OqrJDPMZgizTkvd0NJJuhr'),
(21, 'Roberta Fernandes Oliveira Felippe', '2000-03-20', 'robertafernandes200@gmail.com', '21970820055', 'Básico', '$2y$10$19T1U9qXyb7imHQqO5awoeTB9TEijUWp/BKXXHzJ1Qz'),
(22, 'Roberta Fernandes Oliveira Felippe', '2000-03-20', 'robertafernandes950@gmail.com', '21970820055', 'Básico', '$2y$10$KJmfSfjOLQ5ESWnUuB3VMeELz0zFtOii8rgEExCyjtCwv3S.5Lid.'),
(23, 'Banana Fernandes Oliveira Felippe', '2000-03-20', 'banana@gmail.com', '21970820055', 'Premium', '$2y$10$LE6jPeLjgVHtNvjAhzv6yef7AFAGAOLB1ClQmCTx0sFfVNRHmNula');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
