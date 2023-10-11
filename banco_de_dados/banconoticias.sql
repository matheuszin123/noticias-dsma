-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/10/2023 às 15:25
-- Versão do servidor: 10.4.25-MariaDB
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banconoticias`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acessar`
--

CREATE TABLE `acessar` (
  `ID-acessar` int(11) NOT NULL,
  `ID-Noticia` int(11) NOT NULL,
  `ID-cliente` int(11) NOT NULL,
  `QuantidadeAcesso` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `admininastro`
--

CREATE TABLE `admininastro` (
  `ID-admin` int(11) NOT NULL,
  `Nome` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Senha` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `administra`
--

CREATE TABLE `administra` (
  `ID-administra` int(11) NOT NULL,
  `ID-admin` int(11) NOT NULL,
  `ID-cliente` int(11) NOT NULL,
  `ID-jornalista` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID-cliente` int(11) NOT NULL,
  `Nome` varchar(120) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(120) CHARACTER SET utf8 NOT NULL,
  `Senha` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `informar`
--

CREATE TABLE `informar` (
  `ID-informar` int(11) NOT NULL,
  `ID-jornalista` int(11) NOT NULL,
  `ID-Noticias` int(11) NOT NULL,
  `HoraPublicada` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jornalista`
--

CREATE TABLE `jornalista` (
  `ID-jornalista` int(10) NOT NULL,
  `Nome` varchar(120) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(120) CHARACTER SET utf8 NOT NULL,
  `Senha` varchar(20) CHARACTER SET utf8 NOT NULL,
  `CPF` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `jornalista`
--

INSERT INTO `jornalista` (`ID-jornalista`, `Nome`, `Email`, `Senha`, `CPF`) VALUES
(1, 'leoestronda', 'leoestroda@email.com', 'senha123', 90919029),
(2, 'leoestronda', 'wqdwqq@gmail.com', 'senha123', 90919029);

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia`
--

CREATE TABLE `noticia` (
  `ID-Noticias` int(11) NOT NULL,
  `titulo` varchar(120) CHARACTER SET utf8 NOT NULL,
  `texto` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `acessar`
--
ALTER TABLE `acessar`
  ADD PRIMARY KEY (`ID-acessar`),
  ADD KEY `ID-cliente` (`ID-cliente`),
  ADD KEY `ID-Noticia` (`ID-Noticia`);

--
-- Índices de tabela `admininastro`
--
ALTER TABLE `admininastro`
  ADD PRIMARY KEY (`ID-admin`);

--
-- Índices de tabela `administra`
--
ALTER TABLE `administra`
  ADD PRIMARY KEY (`ID-administra`),
  ADD KEY `ID-admin` (`ID-admin`),
  ADD KEY `ID-cliente` (`ID-cliente`),
  ADD KEY `ID-jornalista` (`ID-jornalista`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID-cliente`);

--
-- Índices de tabela `informar`
--
ALTER TABLE `informar`
  ADD PRIMARY KEY (`ID-informar`),
  ADD KEY `ID-jornalista` (`ID-jornalista`),
  ADD KEY `ID-Noticias` (`ID-Noticias`);

--
-- Índices de tabela `jornalista`
--
ALTER TABLE `jornalista`
  ADD PRIMARY KEY (`ID-jornalista`);

--
-- Índices de tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`ID-Noticias`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessar`
--
ALTER TABLE `acessar`
  MODIFY `ID-acessar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `admininastro`
--
ALTER TABLE `admininastro`
  MODIFY `ID-admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `administra`
--
ALTER TABLE `administra`
  MODIFY `ID-administra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID-cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `informar`
--
ALTER TABLE `informar`
  MODIFY `ID-informar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jornalista`
--
ALTER TABLE `jornalista`
  MODIFY `ID-jornalista` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `ID-Noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
