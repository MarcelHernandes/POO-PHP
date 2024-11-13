<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Excluir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Página Excluir</title>
</head>
<body>
    <form method="POST">
    <label>Código: </label>
    <input type="number" name="codigo" id="codigo"/><br><br>

    <button type="submit">Excluir
        <?php
            $conexao = new Conexao();
            $codigo = $_POST['codigo'];
            $excluir = new Excluir();
            
        ?>
    </button>
    <?php
        $excluir->excluirPessoa($conexao,$codigo);
    ?>
    </form>
    <br><br>
    <a href="menu.php"><button>Voltar</button></a>
</body>
</html>