<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        include('inicia_sessao.php');
        if(empty($_SESSION['login'])){
            header("Location:login.html");
        }   
      

    ?>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="nome">
        <?php
            echo "<a>Olá!!! ". $_SESSION['login']['nome']."</a>";
            echo "<a href = 'logout.php'><button>Logout</button></a>"
        ?>
    </div>
    <div id="cidade">
        <h1>CRUD CIDADES:</h1>
        <h4>Olá, bem vindo ao meu sistema, escolha qual opção você deseja:</h4>


        <div>
            <label for="cadastrar">Deseja cadastrar a cidade:</label>
            <a href="CadastroCidade.html"><button id="cadastrar" name="cadastrar">Cadastrar</button></a>
            <br>
        </div>
        <div>
            <label for="listar">Deseja listar as cidades:</label>
            <a href="ListarCidades.php"><button id="listar" name="listar">Listar</button></a>
            <br>
        </div>
    </div>

    <div id="cliente">
        <h1>CRUD CLIENTE:</h1>
        <h4>Olá, bem vindo ao meu sistema, escolha qual opção você deseja:</h4>
        <div>
            <label for="cadastrar">Deseja cadastrar um cliente:</label>
            <a href="CadastroCliente.php"><button id="cadastrarC" name="cadastrarC">Cadastrar</button></a>
            <br>
        </div>
        <div>
            
            <label for="listar">Deseja listar as cidades:</label>
            <a href="Listarclientes.php"><button id="listarC" name="listarC">Listar</button></a>
            <br>
        </div>
    </div>
</body>

</html>