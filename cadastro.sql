CREATE DATABASE cadastro;

USE cadastro;

CREATE TABLE usuarios(
	id_usuario int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(50) NOT NULL,
	telefone varchar(20) NOT NULL,
	email varchar(40) NOT NULL,
	senha varchar(32) NOT NULL,
    foto_perfil varchar(100) not null,
    profissional boolean,
    avaliacao_user int(5)
);

CREATE TABLE imagem(
	id_img int(11) not null auto_increment primary key,
    imagem varchar(20) not null,
    avaliacao_img int(5),
    id_usuario integer
);

ALTER TABLE imagem
ADD CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario);
