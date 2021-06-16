-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2021 às 03:28
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `kikanime`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_adm` int(11) NOT NULL,
  `nome_adm` varchar(100) NOT NULL,
  `email_adm` varchar(100) NOT NULL,
  `senha_adm` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_adm`, `nome_adm`, `email_adm`, `senha_adm`) VALUES
(1, 'Fernanda Ingrid', 'fernanda@gmail.com', '1234'),
(2, 'Lucia Helena', 'lucia@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `cookie_carrinho` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `id_produto`, `id_cliente`, `cookie_carrinho`) VALUES
(1, 4, 0, '192.168.56.1'),
(2, 5, 0, '192.168.56.1'),
(3, 7, 0, '192.168.56.1'),
(4, 10, 0, '192.168.56.1'),
(5, 9, 0, '192.168.56.1'),
(6, 2, 0, '192.168.56.1'),
(7, 4, 0, '192.168.56.1'),
(8, 9, 0, '192.168.56.1'),
(9, 1, 0, '192.168.56.1'),
(10, 0, 0, '192.168.56.1'),
(11, 0, 0, '192.168.56.1'),
(12, 0, 0, '192.168.56.1'),
(13, 0, 0, '192.168.56.1'),
(14, 0, 0, '192.168.56.1'),
(15, 0, 0, '192.168.56.1'),
(16, 0, 0, '192.168.56.1'),
(17, 0, 0, '192.168.56.1'),
(18, 0, 0, '192.168.56.1'),
(19, 0, 0, '192.168.56.1'),
(20, 0, 0, '192.168.56.1'),
(21, 0, 0, '192.168.56.1'),
(22, 0, 0, '192.168.56.1'),
(23, 0, 0, '192.168.56.1'),
(24, 0, 0, '192.168.56.1'),
(25, 0, 0, '192.168.56.1'),
(26, 0, 0, '192.168.56.1'),
(27, 0, 0, '192.168.56.1'),
(28, 0, 0, '192.168.56.1'),
(29, 0, 0, '192.168.56.1'),
(30, 0, 0, '192.168.56.1'),
(31, 0, 0, '192.168.56.1'),
(32, 0, 0, '192.168.56.1'),
(33, 0, 0, '192.168.56.1'),
(34, 0, 0, '192.168.56.1'),
(35, 0, 0, '192.168.56.1'),
(36, 0, 0, '192.168.56.1'),
(37, 0, 0, '192.168.56.1'),
(38, 0, 0, '192.168.56.1'),
(39, 0, 0, '192.168.56.1'),
(40, 0, 0, '192.168.56.1'),
(41, 0, 0, '192.168.56.1'),
(42, 0, 0, '192.168.56.1'),
(43, 0, 0, '192.168.56.1'),
(44, 0, 0, '192.168.56.1'),
(45, 0, 0, '192.168.56.1'),
(46, 0, 0, '192.168.56.1'),
(47, 0, 0, '192.168.56.1'),
(48, 0, 0, '192.168.56.1'),
(49, 0, 0, '192.168.56.1'),
(50, 0, 0, '192.168.56.1'),
(51, 0, 0, '192.168.56.1'),
(52, 0, 0, '192.168.56.1'),
(53, 0, 0, '192.168.56.1'),
(54, 0, 0, '192.168.56.1'),
(55, 0, 0, '192.168.56.1'),
(56, 0, 0, '192.168.56.1'),
(57, 0, 0, '192.168.56.1'),
(58, 0, 0, '192.168.56.1'),
(59, 0, 0, '192.168.56.1'),
(60, 0, 0, '192.168.56.1'),
(61, 0, 0, '192.168.56.1'),
(62, 0, 0, '192.168.56.1'),
(63, 0, 0, '192.168.56.1'),
(64, 0, 0, '192.168.56.1'),
(65, 0, 0, '192.168.56.1'),
(66, 0, 0, '192.168.56.1'),
(67, 0, 0, '192.168.56.1'),
(68, 0, 0, '192.168.56.1'),
(69, 0, 0, '192.168.56.1'),
(70, 0, 0, '192.168.56.1'),
(71, 0, 0, '192.168.56.1'),
(72, 0, 0, '192.168.56.1'),
(73, 0, 0, '192.168.56.1'),
(74, 0, 0, '192.168.56.1'),
(75, 0, 0, '192.168.56.1'),
(76, 0, 0, '192.168.56.1'),
(77, 0, 0, '192.168.56.1'),
(78, 0, 0, '192.168.56.1'),
(79, 0, 0, '192.168.56.1'),
(80, 0, 0, '192.168.56.1'),
(81, 0, 0, '192.168.56.1'),
(82, 0, 0, '192.168.56.1'),
(83, 0, 0, '192.168.56.1'),
(84, 0, 0, '192.168.56.1'),
(85, 0, 0, '192.168.56.1'),
(86, 0, 0, '192.168.56.1'),
(87, 0, 0, '192.168.56.1'),
(88, 0, 0, '192.168.56.1'),
(89, 0, 0, '192.168.56.1'),
(90, 0, 0, '192.168.56.1'),
(91, 0, 0, '192.168.56.1'),
(92, 0, 0, '192.168.56.1'),
(93, 0, 0, '192.168.56.1'),
(94, 0, 0, '192.168.56.1'),
(95, 0, 0, '192.168.56.1'),
(96, 0, 0, '192.168.56.1'),
(97, 0, 0, '192.168.56.1'),
(98, 0, 0, '192.168.56.1'),
(99, 0, 0, '192.168.56.1'),
(100, 0, 0, '192.168.56.1'),
(101, 0, 0, '192.168.56.1'),
(102, 0, 0, '192.168.56.1'),
(103, 0, 0, '192.168.56.1'),
(104, 0, 0, '192.168.56.1'),
(105, 0, 0, '192.168.56.1'),
(106, 0, 0, '192.168.56.1'),
(107, 0, 0, '192.168.56.1'),
(108, 0, 0, '192.168.56.1'),
(109, 0, 0, '192.168.56.1'),
(110, 0, 0, '192.168.56.1'),
(111, 0, 0, '192.168.56.1'),
(112, 0, 0, '192.168.56.1'),
(113, 0, 0, '192.168.56.1'),
(114, 0, 0, '192.168.56.1'),
(115, 0, 0, '192.168.56.1'),
(116, 0, 0, '192.168.56.1'),
(117, 0, 0, '192.168.56.1'),
(118, 0, 0, '192.168.56.1'),
(119, 0, 0, '192.168.56.1'),
(120, 0, 0, '192.168.56.1'),
(121, 0, 0, '192.168.56.1'),
(122, 0, 0, '192.168.56.1'),
(123, 0, 0, '192.168.56.1'),
(124, 0, 0, '192.168.56.1'),
(125, 0, 0, '192.168.56.1'),
(126, 0, 0, '192.168.56.1'),
(127, 0, 0, '192.168.56.1'),
(128, 0, 0, '192.168.56.1'),
(129, 0, 0, '192.168.56.1'),
(130, 0, 0, '192.168.56.1'),
(131, 0, 0, '192.168.56.1'),
(132, 0, 0, '192.168.56.1'),
(133, 0, 0, '192.168.56.1'),
(134, 0, 0, '192.168.56.1'),
(135, 0, 0, '192.168.56.1'),
(136, 0, 0, '192.168.56.1'),
(137, 0, 0, '192.168.56.1'),
(138, 0, 0, '192.168.56.1'),
(139, 0, 0, '192.168.56.1'),
(140, 0, 0, '192.168.56.1'),
(141, 0, 0, '192.168.56.1'),
(142, 0, 0, '192.168.56.1'),
(143, 0, 0, '192.168.56.1'),
(144, 0, 0, '192.168.56.1'),
(145, 0, 0, '192.168.56.1'),
(146, 0, 0, '192.168.56.1'),
(147, 0, 0, '192.168.56.1'),
(148, 0, 0, '192.168.56.1'),
(149, 0, 0, '192.168.56.1'),
(150, 0, 0, '192.168.56.1'),
(151, 0, 0, '192.168.56.1'),
(152, 0, 0, '192.168.56.1'),
(153, 0, 0, '192.168.56.1'),
(154, 0, 0, '192.168.56.1'),
(155, 0, 0, '192.168.56.1'),
(156, 0, 0, '192.168.56.1'),
(157, 0, 0, '192.168.56.1'),
(158, 0, 0, '192.168.56.1'),
(159, 0, 0, '192.168.56.1'),
(160, 0, 0, '192.168.56.1'),
(161, 0, 0, '192.168.56.1'),
(162, 0, 0, '192.168.56.1'),
(163, 0, 0, '192.168.56.1'),
(164, 0, 0, '192.168.56.1'),
(165, 0, 0, '192.168.56.1'),
(166, 0, 0, '192.168.56.1'),
(167, 0, 0, '192.168.56.1'),
(168, 0, 0, '192.168.56.1'),
(169, 0, 0, '192.168.56.1'),
(170, 0, 0, '192.168.56.1'),
(171, 0, 0, '192.168.56.1'),
(172, 0, 0, '192.168.56.1'),
(173, 0, 0, '192.168.56.1'),
(174, 0, 0, '192.168.56.1'),
(175, 0, 0, '192.168.56.1'),
(176, 0, 0, '192.168.56.1'),
(177, 0, 0, '192.168.56.1'),
(178, 0, 0, '192.168.56.1'),
(179, 0, 0, '192.168.56.1'),
(180, 0, 0, '192.168.56.1'),
(181, 0, 0, '192.168.56.1'),
(182, 0, 0, '192.168.56.1'),
(183, 0, 0, '192.168.56.1'),
(184, 0, 0, '192.168.56.1'),
(185, 0, 0, '192.168.56.1'),
(186, 0, 0, '192.168.56.1'),
(187, 0, 0, '192.168.56.1'),
(188, 0, 0, '192.168.56.1'),
(189, 0, 0, '192.168.56.1'),
(190, 0, 0, '192.168.56.1'),
(191, 0, 0, '192.168.56.1'),
(192, 0, 0, '192.168.56.1'),
(193, 0, 0, '192.168.56.1'),
(194, 0, 0, '192.168.56.1'),
(195, 0, 0, '192.168.56.1'),
(196, 0, 0, '192.168.56.1'),
(197, 0, 0, '192.168.56.1'),
(198, 0, 0, '192.168.56.1'),
(199, 0, 0, '192.168.56.1'),
(200, 0, 0, '192.168.56.1'),
(201, 0, 0, '192.168.56.1'),
(202, 0, 0, '192.168.56.1'),
(203, 0, 0, '192.168.56.1'),
(204, 0, 0, '192.168.56.1'),
(205, 0, 0, '192.168.56.1'),
(206, 0, 0, '192.168.56.1'),
(207, 0, 0, '192.168.56.1'),
(208, 0, 0, '192.168.56.1'),
(209, 0, 0, '192.168.56.1'),
(210, 4, 0, '192.168.56.1'),
(211, 7, 0, '192.168.56.1'),
(212, 7, 0, '192.168.56.1'),
(213, 4, 0, '192.168.56.1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Camiseta'),
(2, 'Moletom'),
(3, 'Utensílio'),
(4, 'Decoração ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `email_cliente` varchar(100) NOT NULL,
  `senha_cliente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `email_cliente`, `senha_cliente`) VALUES
(1, 'Henrique Mesquita Viola', 'henrique@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE `cor` (
  `id_cor` int(11) NOT NULL,
  `nome_cor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cor`
--

INSERT INTO `cor` (`id_cor`, `nome_cor`) VALUES
(1, 'Preto'),
(2, 'Branco'),
(3, 'Cinza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `descricao`
--

CREATE TABLE `descricao` (
  `id_descricao` int(11) NOT NULL,
  `nome_descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `descricao`
--

INSERT INTO `descricao` (`id_descricao`, `nome_descricao`) VALUES
(1, 'Camiseta Feminina'),
(2, 'Camiseta Masculina'),
(3, 'Baby Look Unissex'),
(4, 'Moletom Unissex'),
(5, 'Caneca Cerâmica '),
(6, 'Almofada 40cm x 40cm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_venda`
--

CREATE TABLE `item_venda` (
  `id_item_venda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `quantidade_item_venda` int(11) NOT NULL,
  `total_item_venda` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `id_descricao` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_tamanho` int(11) NOT NULL,
  `id_cor` int(11) NOT NULL,
  `quantidade_produto` int(11) NOT NULL,
  `preco_produto` decimal(6,2) NOT NULL,
  `imagem_produto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_descricao`, `id_categoria`, `id_tamanho`, `id_cor`, `quantidade_produto`, `preco_produto`, `imagem_produto`) VALUES
(1, 1, 1, 1, 1, 1, '60.00', '3.jpg'),
(2, 1, 1, 2, 1, 1, '60.00', '4.jpg'),
(3, 1, 1, 3, 1, 1, '60.00', '10.jpg'),
(4, 1, 1, 4, 1, 1, '60.00', '5.jpg'),
(5, 2, 1, 1, 1, 1, '60.00', '22.jpg'),
(6, 6, 4, 5, 1, 1, '59.90', '11.jpg'),
(7, 5, 3, 5, 1, 1, '49.90', '6.jpg'),
(9, 6, 4, 5, 1, 1, '59.90', '19.jpg'),
(10, 4, 2, 1, 3, 1, '100.00', '13.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanho`
--

CREATE TABLE `tamanho` (
  `id_tamanho` int(11) NOT NULL,
  `tamanho` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tamanho`
--

INSERT INTO `tamanho` (`id_tamanho`, `tamanho`) VALUES
(1, 'P'),
(2, 'M'),
(3, 'G'),
(4, 'GG'),
(5, 'UN');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_venda` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_venda` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_adm`),
  ADD UNIQUE KEY `email_unique` (`email_adm`);

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `email_unique` (`email_cliente`);

--
-- Índices para tabela `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`id_cor`);

--
-- Índices para tabela `descricao`
--
ALTER TABLE `descricao`
  ADD PRIMARY KEY (`id_descricao`);

--
-- Índices para tabela `item_venda`
--
ALTER TABLE `item_venda`
  ADD PRIMARY KEY (`id_item_venda`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `tamanho`
--
ALTER TABLE `tamanho`
  ADD PRIMARY KEY (`id_tamanho`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cor`
--
ALTER TABLE `cor`
  MODIFY `id_cor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `descricao`
--
ALTER TABLE `descricao`
  MODIFY `id_descricao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `item_venda`
--
ALTER TABLE `item_venda`
  MODIFY `id_item_venda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tamanho`
--
ALTER TABLE `tamanho`
  MODIFY `id_tamanho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
