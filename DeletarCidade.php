<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include('Includes/conexao.php');
        $result = mysqli_query($con, $sql);
    ?>

<?php
        include('Includes/conexao.php');
        $sql = "select * from Cidade";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Cidades:</h1>
    <a href="CadastroCidade.html"><h3>Cadastrar Cidade</h3></a>
    <table align="center" border="1" width="500px">
        <tr>
            <Th>Codigo</Th>
            <th>Nome</th>
            <th>Estado</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo"<tr>";
                echo"<td>".$row['id']."</td>";
                echo"<td>".$row['nome']."</td>";
                echo"<td>".$row['estado']."</td>";
                echo"</tr>";
            }
        ?>
    </table>
</body>
</html>