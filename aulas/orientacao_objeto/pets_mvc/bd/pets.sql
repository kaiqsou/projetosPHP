-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Abr-2025 às 15:35
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pets`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pets`
--

CREATE TABLE `pets` (
  `id_pet` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idade` varchar(50) NOT NULL,
  `raca` varchar(80) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pets`
--

INSERT INTO `pets` (`id_pet`, `nome`, `idade`, `raca`, `cor`, `id_usuario`) VALUES
(1, 'Malu', '10', 'Tamanduá', 'Marrom', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id_pet`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pets`
--
ALTER TABLE `pets`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
