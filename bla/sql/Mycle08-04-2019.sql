
create table produtos(id int not null auto_increment primary key, nomeProduto varchar(100) not null, cor varchar(20),valorAtacad decimal(5,2),valorVarejo decimal(5,2) not null, descProduto
	varchar(200) not null, codigoProduto varchar(32) not null, dataProduto date not null, tamanhoMinimo int, tamanhoMaximo int,tag varchar(200))Engine = Innodb, charset = utf8;

create table contas(id int not null primary key auto_increment, usuario varchar(100) not null, senha varchar(32) not null)Engine = Innodb, charset  = utf8;

create table contatos(id int not null primary key auto_increment, email varchar(255) not null, telefone varchar(16), celular varchar(16) not null,id_pessoa int not null)Engine = Innodb, charset  = utf8;

create table enderecos(id int not null primary key auto_increment, estado varchar(50) not null, cidade varchar(50) not null,bairro varchar(50) not null 
	,rua varchar(50) not null,numero int not null, cep varchar(10),id_pessoa int not null,complemento varchar(100))Engine = Innodb, charset  = utf8;

create table pessoas(id int not null primary key auto_increment,nome varchar(200) not null, sexo boolean, id_login int not null,id_dados_pessoais int not null)Engine = Innodb, charset  = utf8;

create table dadosPessoais(id int not null auto_increment primary key,cpf varchar(15) not null,dataNascimento date not null)Engine = Innodb, charset  = utf8;

create table pedidos(id int not null primary key auto_increment, id_produto int not null, valorTotal decimal(6,2) not null, quantidade int not null,  id_pessoa int not null,dataCompra date)Engine = Innodb,charset = utf8;

alter table contato add foreign key(id_pessoa) references pessoa(id);

alter table endereco add foreign key(id_pessoa) references pessoa(id);

alter table pessoa add foreign key(id_login) references conta(id);

alter table pessoa add foreign key(id_dados_pessoais) references pessoa(id);

alter table pedidos add foreign key(id_produto) references produto(id);

alter table pedidos add foreign key(id_pessoa) references pessoa(id);
