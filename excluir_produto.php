<?php

include('conexao.php');

$id = $_GET["id"];

$sql = "DELETE FROM produtos WHERE id_produto = '$id'";

$mysqli->query($sql);

header('Location: visualizar_produtos.php');
exit;

?>