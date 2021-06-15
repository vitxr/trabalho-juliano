DROP TABLE IF EXISTS `pedido`;
DROP TABLE IF EXISTS `produto`;
DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `Cod_cli` int(11) NOT NULL auto_increment,
  `Senha_cli` varchar(20) NOT NULL,
  `Email_cli` varchar(50) NOT NULL,
  `Telefone_cli` varchar(14) NOT NULL,
  `Celular_cli` int(14) NOT NULL,
  `Nome_cli` varchar(40) NOT NULL,
  `Sobrenome_cli` varchar(40) NOT NULL,
  `CPF_cli` int(14) NOT NULL,
  `Nascimento_cli` varchar(10) NOT NULL,
  PRIMARY KEY  (`Cod_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE `produto` (
  `Cod_pro` int(11) NOT NULL auto_increment,
  `Valor_pro` decimal(50,0) NOT NULL,
  `Descr_pro` text,
  `Fabri_pro` varchar(100) default '',
  `Genero_pro` varchar(80) NOT NULL default '',
  `Foto_prod` varchar(80) NOT NULL default '',
  `Nome_pro` varchar(400) NOT NULL,
  PRIMARY KEY  (`Cod_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

CREATE TABLE `pedido` (
  `Cod_ped` int(11) NOT NULL auto_increment,
  `Valor_ped` varchar(40) NOT NULL default '',
  `Cod_cli` int(11) NOT NULL,
  `Cod_pro` int(11) NOT NULL,
  PRIMARY KEY  (`Cod_ped`),
  KEY `FK_pedido` (`Cod_cli`),
  KEY `FK_pedido2` (`Cod_pro`),
  CONSTRAINT `FK_pedido2` FOREIGN KEY (`Cod_pro`) REFERENCES `produto` (`Cod_pro`),
  CONSTRAINT `FK_pedido` FOREIGN KEY (`Cod_cli`) REFERENCES `cliente` (`Cod_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;