<?php
    include("Includes/conexao.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM Cliente WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
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
<form action="AtualizarClienteExe.php" method="post">
        <fieldset>
            <legend>Atulizar Cliente</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value=" <?php echo $row['nome'] ?>">
            </div>
            <div>
                <label for="idade">Idade</label>
                <input type="text" name="idade" id="idade" value="<?php echo $row['idade'] ?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value=" <?php echo $row['email'] ?>">
            </div>
            <button type="submit">Atualizar</button>
            <div>
                <input type="hidden" name="id" value="<?php echo $id; ?>"> 
            </div>
        </fieldset>
    </form>
    <a href="ListarClientes.php"><h3>Ver as cidades cadastradas</h3></a>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>