<?php

include ('conexao.php');

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$status_produto = $_POST["status_produto"];

$sql = "INSERT INTO produto(nome, preco, quantidade, status_produto) VALUES
('$nome', '$preco', '$quantidade', '$status_produto')";

$mysqli->query($sql);

header('Location: index.php');
exit;

?>