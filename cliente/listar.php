<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1>listar clientes</h1>
    <hr>
    <table class="table">
    <thead>
        <tr>
            <th>nome</th>
            <th>sexo</th>
            <th>telefone</th>
            <th>endereço</th>
            <th>operação</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include_once("../conectar.php");
        $sql = "SELECT * FROM cliente";
        $resultado = mysqli_query($conexao,$sql);
        if ($resultado){
            while($linha = mysqli_fetch_assoc($resultado)){
                
                echo "<tr>";
                echo "<td>".$linha['nome']."</td>";
                echo "<td>".$linha['sexo']."</td>";
                echo "<td>".$linha['telefone']."</td>";
                echo "<td>".$linha['endereco']."</td>";
                echo "<td>";
                echo "<a href='formeditar.php?id=".$linha['id']."'class='btn btn-primary'>editar</a>";
                echo "<a href='#' class='btn btn-danger'>remover</a>";
                echo "</td>";
                echo "</tr>";
                
            }
        }
        else{
            echo "erro no select".mysqli_error($conexao);
        }
        
        ?>

</div>
</body>
</html>