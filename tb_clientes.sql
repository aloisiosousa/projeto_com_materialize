create table if not exists tb_clientes(

	id int auto_increment not null primary key,
	nome varchar(40) not null,
	email varchar(50) not null unique,
	telefone varchar(15) not null
) default character set utf8 default collate utf8_general_ci; 