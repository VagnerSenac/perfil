-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Fev-2023 às 02:17
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_perfil`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_perfil`
--

CREATE TABLE `t_perfil` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `profissao` varchar(60) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `instagram` varchar(300) NOT NULL,
  `twitter` varchar(300) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `linkedin` varchar(300) NOT NULL,
  `youtube` varchar(300) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `fundo` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `t_perfil`
--

INSERT INTO `t_perfil` (`id`, `nome`, `profissao`, `descricao`, `instagram`, `twitter`, `facebook`, `linkedin`, `youtube`, `senha`, `foto`, `fundo`, `email`) VALUES
(3, 'Vagner Lourenço', 'Desenvolvedor', 'eeee', '', '', '', '', 'https://www.youtube.com/watch?v=IPBevIAv3Zo', '123456', 'https://avatars.githubusercontent.com/u/90052483?s=400&u=84cd3beef431873875b720abe9426101c8dd6080&v=4', 'https://img.freepik.com/vetores-gratis/fundo-azul-de-memphis-com-meios-tons-e-elementos-de-linha_1017-33622.jpg', 'vagnerinfo@yahoo.com.br'),
(4, 'Zebra', 'sdf', 'dsfdf', 'yuiyu', 'iyuiyu', 'iyui', 'sdf', 'yui', '123456', 'https://www.cobli.co/wp-content/uploads/2020/11/Precos-da-Palio-Weekend-scaled-1.jpg', 'https://img.freepik.com/vetores-gratis/fundo-azul-de-memphis-com-meios-tons-e-elementos-de-linha_1017-33622.jpg', 'vagerinfo@yahoo.com.br');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_perfil`
--
ALTER TABLE `t_perfil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_perfil`
--
ALTER TABLE `t_perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
