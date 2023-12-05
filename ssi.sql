-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.18-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para ssi
CREATE DATABASE IF NOT EXISTS `ssi` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ssi`;

-- Copiando estrutura para tabela ssi.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `IdAdministrador` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Senha` varchar(45) DEFAULT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  `DataCadastro` datetime DEFAULT NULL,
  `Status` enum('Ativo','Inativo') DEFAULT NULL,
  PRIMARY KEY (`IdAdministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ssi.administrador: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;

-- Copiando estrutura para tabela ssi.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) NOT NULL,
  `CPF` varchar(20) DEFAULT NULL,
  `Data de nacimento` date DEFAULT NULL,
  `Sexo` enum('Masculino','Feminino','Outro') DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telefone` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ssi.cliente: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela ssi.matricula
CREATE TABLE IF NOT EXISTS `matricula` (
  `IdMatricula` int(11) NOT NULL AUTO_INCREMENT,
  `IdModalidades` int(11) DEFAULT NULL,
  `IdCliente` int(11) DEFAULT NULL,
  `Plano` enum('Single','Easy','Premiun') DEFAULT NULL,
  `Status` enum('Aguardando','Ativo','Pausado','Suspenso') DEFAULT 'Aguardando',
  `Cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`IdMatricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ssi.matricula: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `matricula` DISABLE KEYS */;
/*!40000 ALTER TABLE `matricula` ENABLE KEYS */;

-- Copiando estrutura para tabela ssi.matriculas
CREATE TABLE IF NOT EXISTS `matriculas` (
  `IdMatriculas` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) DEFAULT NULL,
  `Cpf` varchar(15) DEFAULT NULL,
  `DataNasc` date DEFAULT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telefone` varchar(45) DEFAULT NULL,
  `Plano` varchar(45) DEFAULT NULL,
  `Valor` float DEFAULT NULL,
  `Modalidade` varchar(45) DEFAULT NULL,
  `Status` enum('Aguardando','Ativo','Pausado','Suspenso') DEFAULT 'Aguardando',
  PRIMARY KEY (`IdMatriculas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ssi.matriculas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
INSERT INTO `matriculas` (`IdMatriculas`, `Nome`, `Cpf`, `DataNasc`, `Sexo`, `Email`, `Telefone`, `Plano`, `Valor`, `Modalidade`, `Status`) VALUES
	(1, 'Vilma da Silva', '051.457.576-20', '2023-11-16', 'F', 'vilma@vilma.com', '3128855444', 'Easy', 189.8, 'Natação', 'Aguardando');
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;

-- Copiando estrutura para tabela ssi.modalidades
CREATE TABLE IF NOT EXISTS `modalidades` (
  `IdModalidades` int(11) NOT NULL AUTO_INCREMENT,
  `Modalidades` varchar(45) DEFAULT NULL,
  `imagem` varchar(45) DEFAULT NULL,
  `observação` text DEFAULT NULL,
  PRIMARY KEY (`IdModalidades`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ssi.modalidades: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `modalidades` DISABLE KEYS */;
/*!40000 ALTER TABLE `modalidades` ENABLE KEYS */;

-- Copiando estrutura para tabela ssi.turma
CREATE TABLE IF NOT EXISTS `turma` (
  `idturma` int(11) NOT NULL,
  `turmacol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idturma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela ssi.turma: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `turma` DISABLE KEYS */;
/*!40000 ALTER TABLE `turma` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
