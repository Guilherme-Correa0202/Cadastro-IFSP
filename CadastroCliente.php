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
    <form action="CadastroClienteExe.php" method="post">
        <fieldset>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="idade">Idade</label>
                <input type="number" name="idade" id="idade">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="ativo">Ativo</label>
                <select name="ativo" id="ativo">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
            <div>
                <label for="cidade">Cidade:</label>
                <select name="cidade" id="cidade">
                <?php
                    include('Includes/conexao.php');
                    $sql = "SELECT * FROM Cidade";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo " <option value = '".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                    }

                ?>
                </select>
            </div>
            <button type="submit" value="<?php echo $row['id']; ?>">Cadastrar</button>
        </fieldset>
    </form>
    <a href="ListarClientes.php"><h3>Ver as cidades cadastradas</h3></a>
    <a href="index.html"><h3>Voltar ao inicio</h3></a>
</body>
</html>