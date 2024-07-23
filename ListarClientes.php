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
    <?php
        include('Includes/conexao.php');
        $sql = "SELECT cli.id, cli.nome nomecliente, cli.email, cli.idade, cli.ativo, 
                cid.nome nomecidade, cid.estado 
                FROM Cliente cli 
                LEFT JOIN Cidade cid on  cid.id = cli.cidade_id";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Clientes:</h1>
    <a href="CadastroCliente.php"><h3>Cadastrar Cliente</h3></a>
    <table align="center" border="1" width="500px">
        <tr>
            <Th>Codigo</Th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Email</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo"<tr>";
                echo"<td>".$row['id']."</td>";
                echo"<td>".$row['nomecliente']."</td>";
                echo"<td>".$row['idade']."</td>";
                echo"<td>".$row['email']."</td>";
                echo"<td>".$row['nomecidade']."</td>";
                echo"<td>".$row['estado']."</td>";
                echo"<td><a href='AtualizarCliente.php?id=".$row['id']."'>Altera</a></td>";
                echo"<td><a href='DeletarCliente.php?id=".$row['id']."'>Deleta</a></td>";
                echo"</tr>";
            }
        ?>
    </table>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>