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
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value=" <?php echo $row['nome'] ?>">
            </div>
            <div>
                <label for="idade">Idade</label>
                <input type="number" name="idade" id="idade" value="<?php echo $row['idade'] ?>">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" value="<?php echo $row['senha'] ?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value=" <?php echo $row['email'] ?>">
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
                <select name="cidade" id="cidade" >
                <?php
                    include('Includes/conexao.php');
                    $sql = "SELECT * FROM Cidade";
                    $result = mysqli_query($con, $sql);
                    while($row_cid = mysqli_fetch_array($result)){
                        $sel = $row_cid['id'] == $row['cidade_id']?"selected":"";
                        echo " <option  value ='".$row_cid['id']."'".$sel.">".$row_cid['nome']."/".$row_cid['estado']."</option>";
                    }

                ?>
                </select>
            </div>
            <button type="submit">Atualizar</button>
            <div>
                <input type="hidden" name="id" value="<?php echo $id; ?>"> 
            </div>
        </fieldset>
    </form>
    <a href="ListarClientes.php"><h3>Ver as cidades cadastradas</h3></a>
    <a href="index.php"><h3>Voltar ao inicio</h3></a>
</body>
</html>