
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
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $ativo = $_POST['ativo'];
        $senha = $_POST['senha'];
        $cidade = $_POST['cidade'];
        
        echo "<h1>Dados do Cliente:</h1>";
        echo "Nome: $nome<br>";
        echo "Idade: $idade<br>";
        echo "email: $email<br>";
        echo "Ativo: $ativo<br>";
        $sql = "INSERT INTO Cliente (nome, idade, email, ativo, senha, cidade_id)";
        $sql .= " VALUES('".$nome."', '".$idade."', '".$email."', '".$ativo."', '".$senha."' ,'".$cidade."')";
        echo $sql;
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h3>Dados cadastrados com sucesso</h3>";
        }
        else{
            echo "<h3>Erro ao cadastrar</h3>";
            echo mysqli_error($con);
            }
    ?>
    <a href="CadastroCliente.php"><h3>Voltar ao cadastro</h3></a>
    <a href="index.php"><h3>Voltar ao inicio</h3></a>
</body>
</html>