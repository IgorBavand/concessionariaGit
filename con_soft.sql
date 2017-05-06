-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Abr-2017 às 18:48
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `con_soft`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `num_pis` int(50) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerente`
--

CREATE TABLE `gerente` (
  `id_gerente` int(11) NOT NULL,
  `senhaExtra` varchar(50) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gerente`
--

INSERT INTO `gerente` (`id_gerente`, `senhaExtra`, `usuario_id`) VALUES
(1, '123irineu', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` int(20) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `rg` int(5) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `login_usu` varchar(100) NOT NULL,
  `senha_usu` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id_veic` int(11) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `fabricante` varchar(100) NOT NULL,
  `cor` varchar(20) NOT NULL,
  `ano` int(40) NOT NULL,
  `preco` double NOT NULL,
  `chassi` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL,
  `formaPagamento` varchar(100) NOT NULL,
  `servicosAdicionais` varchar(80) NOT NULL,
  `desconto` double NOT NULL,
  `valorTotal` double NOT NULL,
  `chassi` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD KEY `usu_id_fk` (`usu_id`);

--
-- Indexes for table `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`id_gerente`),
  ADD KEY `usuario_id_fk` (`usuario_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id_veic`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id_gerente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id_veic` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
