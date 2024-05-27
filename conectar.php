<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="sistema";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco) or die("erro ao conectar");

    /*

    create table cliente( 
	id int primary key AUTO_INCREMENT,
    nome varchar(50) not null,
    sexo varchar(15) not null,
    telefone varchar(15) not null,
    endereco varchar(255),
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP)

*/
?>

