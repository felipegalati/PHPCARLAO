<?php
    include_once("../conectar.php");
    
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql="INSERT INTO cliente(nome,sexo,endereco,telefone) VALUES('$nome','$sexo','$endereco','$telefone')";
    
    $resultado = mysqli_query($conexao,$sql);

    if($resultado){
        mysqli_close($conexao);
        header("location:listar.php");
        exit();
    }
    else{
        echo "erro ao cadastrar".mysqli_error($conexao);
    }
?>