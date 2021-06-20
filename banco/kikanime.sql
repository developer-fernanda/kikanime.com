-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jun-2021 às 20:42
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
  `id_cliente` int(11) NOT NULL,
  `cookie_carrinho` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `id_produto`, `id_cliente`, `cookie_carrinho`) VALUES
(16, 2, 7, ''),
(17, 1, 7, ''),
(18, 4, 5, ''),
(19, 14, 5, '');

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
(1, 'Henrique Mesquita Viola', 'henrique@gmail.com', '1234'),
(2, 'Adailton Nascimento', 'dada@gmail.com', '1234'),
(3, 'Lucas Moraes', 'lucas@gmail.com', '1234'),
(4, 'Roberto Tomaz', 'roberto@gmail.com', '1234'),
(5, 'Fernanda Ingrid', 'fernanda@gmail.com', '1234'),
(7, 'Lucia Helena', 'luciaH@gmail.com', '1234'),
(8, 'Jesus Galindo', 'jesus@gmail.com', '1234'),
(9, 'Brandon Henrique', 'brandon@gmail.com', '1234'),
(10, 'Elieny Furtado', 'elieny@gmail.com', '1234'),
(11, 'Wesley Silva', 'wesley@gmail.com', '1234'),
(12, 'Ricieri Moraes', 'ricieri@gmail.com', '1234'),
(13, 'Edilson Rocha', 'edilson@gmail.com', '1234'),
(14, 'Livia Arruda', 'livia@gmail.com', '1234'),
(15, 'Rosana Macedo', 'rosana@gmail.com', '1234'),
(16, 'Julio Cesar', 'julio@gmail.com', '1234');

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
-- Estrutura da tabela `estampa`
--

CREATE TABLE `estampa` (
  `id_estampa` int(11) NOT NULL,
  `nome_estampa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estampa`
--

INSERT INTO `estampa` (`id_estampa`, `nome_estampa`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg'),
(14, '14.jpg'),
(15, '15.jpg'),
(16, '16.jpg'),
(17, '17.jpg'),
(18, '18.jpg'),
(19, '19.jpg'),
(20, '20.jpg'),
(21, '21.jpg'),
(22, '22.jpg'),
(23, '23.jpg'),
(24, '24.jpg');

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
  `nome_produto` varchar(50) NOT NULL,
  `descricao_produto` varchar(100) NOT NULL,
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

INSERT INTO `produto` (`id_produto`, `nome_produto`, `descricao_produto`, `id_categoria`, `id_tamanho`, `id_cor`, `quantidade_produto`, `preco_produto`, `imagem_produto`) VALUES
(1, 'Camiseta Feminina ', 'Manga curta - 100 % Algodão ', 1, 1, 1, 1, '60.00', '1.jpg'),
(2, 'Camiseta Feminina', 'Manga curta - 100 % Algodão', 1, 2, 1, 1, '60.00', '2.jpg'),
(3, 'Camiseta Feminina ', 'Manga curta - 100 % Algodão', 1, 3, 1, 1, '60.00', '3.jpg'),
(4, 'Camiseta Feminina ', 'Manga curta - 100 % Algodão', 1, 4, 1, 1, '60.00', '4.jpg'),
(5, 'Camiseta Masculina ', 'Manga curta - 100 % Algodão', 1, 1, 3, 1, '60.00', '5.jpg'),
(6, 'Camiseta Masculina ', 'Manga curta - 100 % Algodão', 1, 2, 3, 1, '60.00', '6.jpg'),
(7, 'Camiseta Masculina ', 'Manga curta - 100 % Algodão', 1, 3, 3, 1, '60.00', '8.jpg'),
(8, 'Camiseta Masculina ', 'Manga curta - 100 % Algodão', 1, 4, 3, 1, '60.00', '9.jpg'),
(9, 'Baby Look ', '100 % Algodão', 1, 1, 2, 1, '55.00', '10.jpg'),
(10, 'Baby Look ', '100 % Algodão', 1, 2, 2, 1, '55.00', '11.jpg'),
(11, 'Moletom Feminino', '100 % Algodão', 2, 3, 1, 1, '100.00', '12.jpg'),
(12, 'Moletom Masculino ', '100 % Algodão', 2, 4, 1, 1, '100.00', '13.jpg'),
(13, 'Caneca', 'Cerâmica', 3, 5, 1, 1, '59.90', '18.jpg'),
(14, 'Almofada', '45cm x 45cm', 4, 5, 3, 1, '59.90', '14.jpg'),
(15, 'Caneca ', 'Cerâmica', 3, 5, 2, 1, '59.90', '17.jpg');

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
-- Índices para tabela `estampa`
--
ALTER TABLE `estampa`
  ADD PRIMARY KEY (`id_estampa`);

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
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `cor`
--
ALTER TABLE `cor`
  MODIFY `id_cor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `estampa`
--
ALTER TABLE `estampa`
  MODIFY `id_estampa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `item_venda`
--
ALTER TABLE `item_venda`
  MODIFY `id_item_venda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
