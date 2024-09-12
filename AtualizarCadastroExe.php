<?php
    include('Includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Alteração da Cidade</h1>
    <?php
    echo "<h5>Nome: $nome</h5>";
    echo "<h5>Estado: $estado</h5>";
    echo "<h5>ID: $id</h5>";
        $sql = "UPDATE Cidade SET nome = '$nome', estado = '$estado' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h3>Dados Atualizados com sucesso</h3>";
        }
        else{
            echo "<h3>Erro ao atualizar</h3>";
            echo mysqli_error($con);
            }
            
    ?>
    <a href="ListarCidades.php"><h3>Ver as cidades cadastradas</h3></a>
    <a href="index.php"><h3>Voltar ao inicio</h3></a>
</body>
</html>