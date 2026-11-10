<?php
include('conexao.php');

$result = $mysqli->query("SELECT * FROM produtos");
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
            <th>Peso</th>
            <th>Funcionário</th>
        </tr>

        <?php while ($produto = $result->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $produto["id_produto"]; ?></td>
            <td><?php echo $produto["nome"]; ?></td>
            <td><?php echo $produto["peso"]; ?></td>
            <td><?php echo $produto["id_funcionario"]; ?></td>      
            <td>    
                <a href="editar_produto.php?id=<?php echo $produto['id_produto']; ?>">
                    <button>Atualizar</button>
                </a>
            </td>
            <td>
                <a href="excluir_produto.php?id=<?php echo $produto['id_produto']; ?>">
                    <button>Excluir</button>
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

    <a href="index.php">Voltar</a>

</body>
</html>