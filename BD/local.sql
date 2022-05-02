-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/03/2022 às 18:03
-- Versão do servidor: 10.4.22-MariaDB
-- Versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `local`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comercio`
--

CREATE TABLE `comercio` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `attendance` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `comercio`
--

INSERT INTO `comercio` (`id`, `name`, `category`, `address`, `attendance`, `contact`, `link`, `logo`) VALUES
(1, 'Sua Pizza', '', 'Street Severina Maria de Jesus, N° 05, Santa Luzia-PB', 'Presencial/Delivery', '(83) 9 9956 - 8480', 'https://sua-pizza.webnode.com', 'suapizza.jpg'),
(2, 'China DVilla', '', 'Street Chico Dourado, s/n, Frei Damião, Santa Luzia-PB', 'Delivery', '(83) 9 9662 - 9055', 'https://chinad-villa.webnode.com', 'chinadvilla.jpg'),
(3, 'Salgateria Vitória', '', 'Street Epitássio Pessoa, N°35, Centro, Santa Luzia-PB', 'Presencial', '(83) 9 8660 - 2358', 'https://salgateriavitoriasantaluzia.webnode.com', 'salgateriavitoria.png'),
(4, 'Tavysson Barber', '', 'Street José Jaime dos Santos, s/n, Santa Luzia-PB', 'Presencial', '(83) 99886 - 1348', 'https://tavysson-barber.webnode.com', 'tavyssonbarber.png'),
(5, 'Cozinha da Tia Leide', '', 'Street Zezé Medeiros, N°152, Santa Luzia-PB', 'Delivery', '(83) 9 9373 - 8993', 'https://cozinha-da-tia-leide.webnode.com', 'cozinhatialeide.jpg'),
(6, 'Churrascaria Europa', '', 'BR 230, saída para Patos, Santa Luzia-PB', 'Presencial', '(83) 9 9173 - 7622', 'https://churrascariaeuropa.webnode.com', 'europa4.jpg'),
(7, 'Arthur Barber', '', 'Street Seráfico Nóbrega, s/n, Centro, Santa Luzia-PB', 'Presencial', '(83) 9 9377 - 1527', 'https://arthurbarber.webnode.com', 'arthurbarber.jpg'),
(8, 'L3 Iluminações', '', 'Street Abdón Nóbrega, S/N, Centro, Santa Luzia-PB', 'Presencial', '(83) 9 9633 - 1788', 'https://l3-iluminacoes.webnode.com', 'l3iluminacoes.jpg'),
(9, 'Delivery da Rô', '', 'Cidade de Santa Luzia-PB', 'Delivery', '(83) 9 9838 - 3970', 'https://deliverydaro.webnode.com', 'deliveryro.jpg'),
(10, 'Maria Medeiros', '', 'São José do Sabugi - PB', 'Online/Presencial', '(83) 9 9915 - 8993', 'https://mariamedeiros7.webnode.com', 'mariamedeiros.jpg'),
(11, 'Espaço Eli Araújo', '', 'Street João Venerável de Morais, São José do Sabugi - PB', 'Presencial', '(83) 9 9806 - 0535', 'https://espaco-eli-araujo3.webnode.com', 'espacoeliaraujo.jpg'),
(12, 'Universo do Cheiro', '', 'Santa Luzia - PB', 'Todo o Brasil', '(83) 9 9680 - 1041', 'https://universo-do-cheiro.webnode.com', 'universo-do-cheiro.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mission` varchar(50) NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'commerce.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `team`
--

INSERT INTO `team` (`id`, `name`, `address`, `email`, `phone`, `mission`, `foto`) VALUES
(1, 'Joe Dee', 'Street', 'joedee@ng.com', '(99)99999-9999', 'Coordinating', '419d4b65033aff179a16fcbbf6bb9a00.jpg'),
(2, 'Alex Dee', 'Street', 'torres.neto@ng.com', '(99)99999-9999', 'Teacher', '16d2b9b8f01b7354b021a42dae4725fe.jpg'),
(3, 'Alie Green', 'Street', 'aliegreen@ng.com', '(99)99999-9999', 'Student', '66497a3ab40a8b8f429905bc9424fd7c.jpg'),
(4, 'Edin Nelli', 'Street', 'edinnelli@ng.com', '(99)99999-9999', 'Student', '009569e10a621c6b4a74780149d76ce4.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `user` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `date` varchar(10) NOT NULL,
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT 2,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `email`, `password`, `photo`, `date`, `level`, `active`) VALUES
(1, 'Manager', 'root', 'root@ng.com', '83353d597cbad458989f2b1a5c1fa1f9f665c858', 'preteam.png', '00/00/1966', 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `comercio`
--
ALTER TABLE `comercio`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comercio`
--
ALTER TABLE `comercio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
