<?php

include('conexao.php');

$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
    $id_funcionario = $_POST["id_funcionario"];

    $sql = "UPDATE produtos SET nome = '$nome', peso = '$peso', id_funcionario = '$id_funcionario' WHERE id_produto = '$id'";

    $mysqli->query($sql);

    header('Location: visualizar_produtos.php');
    exit;
}

$funcionarios = $mysqli->query("SELECT * FROM funcionarios");

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
        <input name="nome" id="nome" type="text">

        <label for="peso">Peso:</label>
        <input name="peso" id="peso" type="number">

        <label for="id_funcionario">Funcionário:</label>
        <select name="id_funcionario" id="id_funcionario">

            <?php while ($funcionario = $funcionarios->fetch_assoc()) { ?>

                <option value="<?php echo $funcionario['id_funcionario']; ?>">
                    <?php echo $funcionario['nome']; ?>
                </option>

            <?php } ?>

        </select>

        <button type="submit">Salvar alterações</button>

    </form>

</body>
</html>