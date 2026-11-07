<?php

include ('conexao.php');

$sql = "SELECT * FROM produto";

$resultado = $mysqli->query($sql);

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Produtos Cadastrados</title>
</head>

<body>

    <h1>Produtos Cadastrados</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Status</th>
        </tr>

        <?php while ($produto = $resultado->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $produto["id"]; ?></td>
            <td><?php echo $produto["nome"]; ?></td>
            <td><?php echo $produto["preco"]; ?></td>
            <td><?php echo $produto["quantidade"]; ?></td>
            <td><?php echo $produto["status_produto"]; ?></td>
            <td>    
                <a href="editar_produto.php?id=<?php echo $produto['id']; ?>">
                    <button>Atualizar</button>
                </a>
            </td>
            <td>
                <a href="excluir_produto.php?id=<?php echo $produto['id']; ?>">
                    <button>Excluir</button>
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

    <a href="index.php">Voltar</a>

</body>
</html>