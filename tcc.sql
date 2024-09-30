-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/07/2017 às 21:50
-- Versão do servidor: 5.7.11-log
-- Versão do PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `animais`
--

CREATE TABLE `animais` (
  `idanimais` int(11) NOT NULL,
  `nome_animal` varchar(45) NOT NULL,
  `idade_animal` varchar(20) NOT NULL,
  `pelagem_animal` varchar(45) NOT NULL,
  `cor_animal` varchar(45) NOT NULL,
  `tipo_animal` varchar(45) NOT NULL,
  `observacoes` varchar(200) NOT NULL,
  `ativo` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `animais`
--

INSERT INTO `animais` (`idanimais`, `nome_animal`, `idade_animal`, `pelagem_animal`, `cor_animal`, `tipo_animal`, `observacoes`, `ativo`, `foto`, `sexo`, `usuario_idusuario`) VALUES
(7, 'Pipoca', '2 anos', 'Média', 'Marrom', 'Cachorro', '', 1, 'images (1).jpg', 'Macho', 3),
(8, 'Bob', '1 ano', 'Pequena', 'Mesclado', 'Cachorro', '', 1, 'images.jpg', 'Macho', 3),
(10, 'Fiona', '5 meses', 'Pequena', 'Mesclado', 'Cachorro', '', 1, 'Os-cachorros-vira-latas-mais-bonitos-e-fofos.jpg', 'Fêmea', 3),
(11, 'Ralf', '2 anos', 'Curta', 'Beje', 'Cachorro', '', 1, 'Serena_REFON.jpg', 'Macho', 3),
(12, 'Scooby', '8 meses', 'Pequena', 'Mesclado', 'Cachorro', '', 1, 'Os-cachorros-vira-latas-mais-bonitos-do-mundo.jpg', 'Macho', 3),
(13, 'Rex', '1 ano', 'Pequena', 'Mesclado', 'Cachorro', '', 1, '10-motivos-pra-adotar-um-vira-lata-1024x682.jpg', 'Macho', 3),
(14, 'Suzy', '6 meses', 'Pequena', 'Branco', 'Cachorro', '', 1, 'bg-vira-lata.jpg', 'Fêmea', 3),
(16, 'Morce', '8 meses', 'Pequena', 'Beje', 'Cachorro', '', 1, 'download.jpg', 'Macho', 3),
(17, 'zeus', '3 anos', 'Pequena', 'Beje', 'Cachorro', '', 1, 'Zeus.jpg', 'Macho', 3),
(18, 'Nick', '2 anos', 'Pequena', 'Marrom', 'Cachorro', '', 1, 'vira-lata-cao.jpg', 'Fêmea', 3),
(19, 'Ray', '4 meses', 'Pequena', 'Branco', 'Cachorro', '', 1, 'viralata1.jpg', 'Macho', 3),
(20, 'Felp', '7 meses', 'Média', 'Mesclado', 'Cachorro', '', 1, 'cao-de-rua-1024x768.jpg', 'Macho', 3),
(22, 'Mel', '2 Meses', 'Média', 'Mesclado', 'Gato', '', 1, 'chiquinhoon.jpg', 'Fêmea', 1),
(23, 'Missi', '1 ano', 'Média', 'Branco', 'Gato', '', 1, 'download.jpg', 'Fêmea', 1),
(25, 'Missi', '2 meses', 'Média', 'Mesclado', 'Gato', '', 1, 'Gato-Vira-Lata-20161031174752.jpg', 'Macho', 1),
(27, 'Pirata', '1 ano', 'Curta', 'Mesclado', 'Gato', '', 1, 'images (2).jpg', 'Macho', 1),
(33, 'Djoe', '2 anos', 'Média', 'Mesclado', 'Gato', '', 1, 'coleira-para-gatos-domesticos-varias-cores-D_NQ_NP_852325-MLB25423150094_032017-O.jpg', 'Macho', 1),
(34, 'Minie', '4 meses', 'Pequena', 'Branco', 'Gato', 'Gato mansinho e dócil.', 1, 'gatoAdocao.jpg', 'Fêmea', 6),
(35, 'Ninão', '4 anos', 'Média', 'Mesclado', '', 'Gato amigável e calmo.', 0, 'ninão.jpg', 'Macho', 6),
(36, 'Mingal', '4 meses', 'Média', 'Mesclado', 'Gato', 'Gatinho Dócil e amigável.', 0, 'ninão.jpg', 'Macho', 8),
(37, 'Bob', '3 anos', 'Média', 'Marrom', 'Cachorro', 'Amigo e muito dócil.', 1, 'cao.jpg', 'Macho', 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL,
  `assunnto` varchar(45) NOT NULL,
  `mensagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `divulgacao`
--

CREATE TABLE `divulgacao` (
  `iddivulgacao` int(11) NOT NULL,
  `data_divulgacao` date NOT NULL,
  `status` int(11) NOT NULL,
  `animais_idanimais` int(11) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `doacao`
--

CREATE TABLE `doacao` (
  `iddoacao` int(11) NOT NULL,
  `tipo_doacao` varchar(45) NOT NULL,
  `quantidade` varchar(20) NOT NULL,
  `ong_idong` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE `eventos` (
  `ideventos` int(11) NOT NULL,
  `data_evento` date NOT NULL,
  `horario_evento` varchar(15) NOT NULL,
  `local_evento` varchar(45) NOT NULL,
  `endereco_evento` varchar(45) NOT NULL,
  `telefone_evento` varchar(45) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `foto_evento` varchar(255) DEFAULT NULL,
  `nome_evento` varchar(50) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `eventos`
--

INSERT INTO `eventos` (`ideventos`, `data_evento`, `horario_evento`, `local_evento`, `endereco_evento`, `telefone_evento`, `descricao`, `foto_evento`, `nome_evento`, `ativo`) VALUES
(1, '2017-07-03', '00:00:08.00000', 'Angeloni', 'Rua das flores, Atiradores', '4734556789', 'Evento destinado a adoção de animais de estimação ', 'feiraAdocao.jpg', '', 0),
(2, '2017-06-30', '00:00:08.00000', 'Giasse Supermercados', 'Rua das Acássias', '47 34556789', 'Evento destinado a adoção de animais de estimação', '', '', 0),
(3, '2017-06-30', '00:00:08.00000', 'Giasse Supermercados', 'Rua das Acássias', '47 34556789', 'Evento destinado a adoção de animais de estimação', '', '', 0),
(4, '2017-08-05', '8h às 17h', 'Big da Americanas', 'Rua das flores', '47 36457213', 'Evento destinado apenas a adoção de cães.', '', '', 0),
(5, '2017-06-30', '13h', 'Big Beira Rio', 'Avenida Beira Rio', '47 34123678', 'Evento adoção de gatos.', '', 'Adoção responsável', 0),
(6, '2017-07-01', '14h', 'Americanas', 'Rua Granadas, Anita Garibaldi', '47 991097654', 'Adoção de animais de estimação', '', 'Encontre um amigo', 0),
(7, '2017-07-05', '8h às 17h', 'Senai Norte II', 'Rua Arno Dohler', '47 3455 6789', 'Evento destinado a doação de produtos para animais.', 'Koala.jpg', 'Doação de Produtos', 0),
(8, '2017-08-14', '8h às 17h', 'Centro de Eventos', 'Avenida Beira Rio, Centro.', '47 3425 6789', ' Evento destinado a castração de cães e gatos por um preço acessível.', '', 'Castração solidária', 1),
(9, '2017-08-14', '8h às 17h', 'Centro de Eventos', 'Avenida Beira Rio, Centro.', '47 3425 6789', ' Evento destinado a castração de cães e gatos por um preço acessível.', '', 'Castração solidária', 0),
(10, '2017-06-30', '8h às 17h', 'Zoobotânico', 'Rua das Pedras, 190, Centro', '47 3455221', ' Evento destinado a adoção de pinguins.', 'Penguins.jpg', 'Adoção de pinguins ', 1),
(11, '2017-07-01', '15h', 'Floricultura Rosa', 'Rua Canário Belga, 1234, Costa e Silva', '47 34556789', ' Evento destinado a doação de Tulipas.', 'Tulips.jpg', 'Doação de tulipas', 0),
(12, '2017-06-07', '14h as 16h', 'Beira Rio', 'Freitas', '4730263331', ' Levar 1kg ', 'Capturar.PNG', 'Pets', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `login`
--

INSERT INTO `login` (`idlogin`, `user`, `senha`, `nivel`) VALUES
(1, 'adm@encontrepet.com.br', '12345', 1),
(2, 'inara', '1234', 2),
(3, 'inara_ribeiro123', 'XINI6245', 2),
(5, 'thais_hoffmann', '12345', 2),
(6, 'maria_123', 'flores123', 2),
(7, 'maria_123', 'flores123', 2),
(8, 'inara123', '050899', 2),
(9, 'inara123', '050899', 2),
(10, 'joana_dias', '12345', 2),
(11, 'booniz', '12345', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ong`
--

CREATE TABLE `ong` (
  `idong` int(11) NOT NULL,
  `nome_ong` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ong`
--

INSERT INTO `ong` (`idong`, `nome_ong`, `email`, `ativo`) VALUES
(2, 'Abrigo Animal Joinville', 'abrigo_animal@gmail.com', 1),
(7, 'Frada', 'contatofrada@gmail.com', 1),
(9, 'Bicho Amigo', 'bichoamigo@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `sobrenome_usuario` varchar(45) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `numero` int(11) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `email` varchar(200) NOT NULL,
  `login_idlogin` int(11) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome_usuario`, `sobrenome_usuario`, `rua`, `bairro`, `numero`, `telefone`, `celular`, `email`, `login_idlogin`, `ativo`) VALUES
(1, 'Inara', 'Ribeiro', 'Victor Pellense', 'Boa Vista', 19, '(47) 34331087', '(47)9 91097198', 'inararibeiro295@gmail.com', 3, 1),
(3, 'Thais', 'Hoffmann', 'Freitas', 'Costa e Silva', 105, '4730263331', '47991429831', 'thais17hoffmann@gmail.com', 5, 1),
(4, 'Maria', 'Flores', 'Rua das Bromélias', 'Pássaros Dourados', 1235, '47 34354678', '47 991097654', 'mariaflores@gmail.com', 6, 1),
(5, 'Maria', 'Flores', 'Rua das Bromélias', 'Pássaros Dourados', 1235, '47 34354678', '47 991097654', 'mariaflores@gmail.com', 7, 0),
(6, 'Inara F.', 'Ribeiro', 'Vitor Pelense', 'Boa Vista', 19, '(47)3422 4948', '(47)9 9207621', 'inararibeiro@gmail.com', 8, 1),
(7, 'Inara F.', 'Ribeiro', 'Vitor Pelense', 'Boa Vista', 19, '(47)3422 4948', '(47)9 9207621', 'inararibeiro@gmail.com', 9, 1),
(8, 'Joana ', 'Dias', 'Acássia Rosa', 'Aventureiro', 127, '(47)34331034', '(47)34556879', 'joanaDias@gmail.com', 10, 1),
(9, 'Boni1', 'Junior', 'Pardal', 'Costa e Silva', 234, '(47)3433 9876', '(47)9 91093456', 'cbjunior@gmail.com', 11, 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`idanimais`),
  ADD KEY `fk_animais_usuario1_idx` (`usuario_idusuario`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`);

--
-- Índices de tabela `divulgacao`
--
ALTER TABLE `divulgacao`
  ADD PRIMARY KEY (`iddivulgacao`),
  ADD KEY `fk_divulgacao_animais1_idx` (`animais_idanimais`);

--
-- Índices de tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`iddoacao`),
  ADD KEY `fk_doacao_ong1_idx` (`ong_idong`),
  ADD KEY `fk_doacao_usuario1_idx` (`usuario_idusuario`);

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ideventos`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`);

--
-- Índices de tabela `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`idong`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_pessoa_fisica_login1_idx` (`login_idlogin`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `idanimais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `divulgacao`
--
ALTER TABLE `divulgacao`
  MODIFY `iddivulgacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `iddoacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ideventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de tabela `ong`
--
ALTER TABLE `ong`
  MODIFY `idong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `animais`
--
ALTER TABLE `animais`
  ADD CONSTRAINT `fk_animais_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `divulgacao`
--
ALTER TABLE `divulgacao`
  ADD CONSTRAINT `fk_divulgacao_animais1` FOREIGN KEY (`animais_idanimais`) REFERENCES `animais` (`idanimais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `fk_doacao_ong1` FOREIGN KEY (`ong_idong`) REFERENCES `ong` (`idong`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_doacao_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_pessoa_fisica_login1` FOREIGN KEY (`login_idlogin`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
