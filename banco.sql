create database remedio_facil;

use remedio_facil;

/*web*/
create table cadastro (
	`cadastro_id` integer not null auto_increment primary key,
	`cadastro_nome` varchar(100) not null,
	`cadastro_telefone` varchar(14) not null,
	`cadastro_status` tinyint(1) not null DEFAULT '0',
	`cadastro_email` varchar(100) not null,
	`cadastro_cnpj` varchar(18) not null,
	`cadastro_msg` text null,
	`cadastro_create` datetime not null,
	`cadastro_update` datetime null
)engine=innodb, charset=utf8;


create table remedio (
	`remedio_id` integer not null auto_increment primary key,
	`remedio_nome` varchar(255) not null,
	`remedio_create` datetime not null,
	`remedio_update` datetime null
)engine=innodb, charset=utf8;


create table farmacia (
	`farmacia_id` integer not null auto_increment primary key,
	`farmacia_nome` varchar(100) not null,
	`farmacia_telefone` integer null,
	`farmacia_login` varchar(100) not null,
	`farmacia_senha` varchar(255) not null,
	`farmacia_cnpj` integer not null,
	`farmacia_cep` varchar(10) not null,
	`farmacia_cidade` varchar(50) not null,
	`farmacia_bairro` varchar(50) not null,
	`farmacia_rua` varchar(150) not null,
	`farmacia_status` tinyint(1) not null DEFAULT '0',
	`farmacia_permission` tinyint(1) not null DEFAULT '0',
	`farmacia_token` varchar(32) null,
	`farmacia_create` datetime not null,
	`farmacia_update` datetime null,
	`farmacia_delete` datetime null,
	FOREIGN KEY(`farmacia_cnpj`) REFERENCES cadastro(`cadastro_id`),
	FOREIGN KEY(`farmacia_telefone`) REFERENCES cadastro(`cadastro_id`)
)engine=innodb, charset=utf8;


create table pedido (
	`pedido_id` integer not null  auto_increment primary key,
	`pedido_nome` varchar(255) not null,
	`pedido_farmacia` integer not null,
	`pedido_status` tinyint(1) not null DEFAULT '0',
	`pedido_create` datetime not null,
	`pedido_update` datetime null,
	FOREIGN KEY(`pedido_farmacia`) REFERENCES farmacia(`farmacia_id`)
)engine=innodb, charset=utf8;



/*webservice*/
create table quantidade (
	`quantidade_id` integer not null auto_increment primary key,
	`quantidade_nome` varchar(6) not null 
)engine=innodb, charset=utf8;


create table service (
	`service_id` integer not null auto_increment primary key,
	`service_farmacia` integer not null,
	`service_remedio` integer not null,
	`service_status` tinyint(1) not null DEFAULT '1',
	`service_qtd` integer not null DEFAULT '2',
	`service_create` datetime not null,
	`service_upate` datetime null,
	FOREIGN KEY(`service_farmacia`) REFERENCES farmacia(`farmacia_id`),
	FOREIGN KEY(`service_remedio`) REFERENCES remedio(`remedio_id`),
	FOREIGN KEY(`service_qtd`) REFERENCES quantidade(`quantidade_id`)
)engine=innodb, charset=utf8;


create table usuario (
	`usuario_id` integer not null auto_increment primary key,
	`usuario_nome` varchar(100) not null,
	`usuario_email` varchar(100) not null,
	`usuario_senha` varchar(100) not null,
	`usuario_nasc` date not null,
	`usuario_tel` varchar(14) not null,
	`usuario_create` datetime not null,
	`usuario_update` datetime null,
	`usuario_delete` datetime null
)engine=innodb, charset=utf8;


create table alergia (
	`alergia_id` integer not null auto_increment primary key,
	`alergia_usuario` integer not null,
	`alergia_remedio` integer not null,
	`alergia_create` datetime not null,
	`alergia_update` datetime null,
	`alergia_delete` datetime null,
	FOREIGN KEY(`alergia_usuario`) REFERENCES usuario(`usuario_id`),
	FOREIGN KEY(`alergia_remedio`) REFERENCES remedio(`remedio_id`)
)engine=innodb, charset=utf8;

INSERT INTO cadastro (cadastro_nome, cadastro_telefone, cadastro_status, cadastro_email, cadastro_cnpj, cadastro_create)
	VALUES ('Remédio Fácil', '11940028922',1, 'suporte@remediofacil.com', '12345678912125', NOW());

INSERT INTO farmacia (farmacia_nome,farmacia_telefone, farmacia_login, farmacia_senha, farmacia_cnpj, farmacia_cep, farmacia_cidade, farmacia_bairro, farmacia_rua,farmacia_status, farmacia_permission, farmacia_create)
	VALUES ('Administrador',1, 'suporte@remediofacil.com', '$2y$10$MkK.tXXGOCJRI1rWHhpm8uzMakzpxmZAJdM7.Mar6V.w2i3tq.1w2', '1', '093811000', 'Mauá', 'Teste', 'Rua teste', '1', '1', NOW());


INSERT INTO quantidade (quantidade_nome) VALUES ('Alta');
INSERT INTO quantidade (quantidade_nome) VALUES ('Normal');
INSERT INTO quantidade (quantidade_nome) VALUES ('Baixa');
