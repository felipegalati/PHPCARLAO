<?php
    include_once("../conectar.php");
    
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $id = $_POST['id'];

    $sql="update cliente set nome='$nome', sexo='$sexo', endereco='$endereco', telefone='$telefone'
        WHERE id = $id";
    
    $resultado = mysqli_query($conexao,$sql);

    if($resultado){
        mysqli_close($conexao);
        header("location:listar.php");
        exit();
    }
    else{
        echo "erro ao atualizar".mysqli_error($conexao);
    }
?>