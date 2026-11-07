<?php

include ('conexao.php');

$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];
    $status_produto = $_POST["status_produto"];

    $sql = "UPDATE produto SET nome = '$nome', preco = '$preco',
    quantidade = '$quantidade', status_produto = '$status_produto'
    WHERE id = '$id'";

    $mysqli->query($sql);

    header('Location: visualizar_produtos.php');
    exit;
}

$sql = "SELECT * FROM produto WHERE id = '$id'";

$resultado = $mysqli->query($sql);

$produto = $resultado->fetch_assoc();

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>

<body>

    <h1>Editar Produto</h1>

    <form action="editar_produto.php?id=<?php echo $id; ?>" method="post">

        <label for="nome">Nome:</label>
        <input name="nome" id="nome" type="text" value="<?= $produto['nome']; ?>">

        <label for="preco">Preço:</label>
        <input name="preco" id="preco" type="number" value="<?= $produto['preco']; ?>">

        <label for="quantidade">Quantidade:</label>
        <input name="quantidade" id="quantidade" type="number" value="<?= $produto['quantidade']; ?>">

        <label for="status_produto">Status:</label>
        <select name="status_produto">
            <option value="Disponível">Disponível</option>
            <option value="Indisponível">Indisponível</option>
        </select>

        <button type="submit">Salvar alterações</button>

    </form>

</body>
</html>