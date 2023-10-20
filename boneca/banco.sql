CREATE DATABASE bonecas;
USE bonecas;

CREATE TABLE instituicao(
ID INTEGER PRIMARY KEY AUTO_INCREMENT
,nome VARCHAR(250)
);
CREATE TABLE usuario(
login VARCHAR(250) PRIMARY KEY
,senha VARCHAR(250)
,nome VARCHAR(250)
,tipo VARCHAR(250) -- adm ou inst
,id_inst INTEGER
,FOREIGN KEY (id_inst) REFERENCES instituicao(ID)
);
CREATE TABLE boneca(
id_boneca INTEGER PRIMARY KEY AUTO_INCREMENT
,modelo VARCHAR(250)
,id_inst INTEGER
,FOREIGN KEY (id_inst) REFERENCES instituicao(ID)
);
CREATE TABLE movimento (
ID INTEGER PRIMARY KEY AUTO_INCREMENT
,data DATE
,tipo VARCHAR(250) -- E=Entrada, R=Restaurada, D=Doada
,id_boneca INTEGER
,FOREIGN KEY (id_boneca) REFERENCES boneca(id_boneca)
);
-- comandos sql que vou colocar no programa quando fizer
-- cadastrar uma instituição
