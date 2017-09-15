create database dbphp7 default character set utf8 default collate utf8_general_ci;
use dbphp7;

create table tb_usuarios (
	
    idusuario int not null auto_increment primary key,
    deslogin varchar(64) not null,
    dessenha varchar(256) not null,
    dtcdastro timestamp not null default current_timestamp() /* seve para pegar a data e a hora atual do servidor*/
    );
    
insert into tb_usuarios (deslogin, dessenha) values('root','!teste');
select * from tb_usuarios;
truncate table tb_usuarios; /* paga todos os registros da tabela e era o auto increment */

    