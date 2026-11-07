<?php

include ('conexao.php');

$id = $_GET["id"];

$sql = "DELETE FROM produto WHERE id = '$id'";

$mysqli->query($sql);

header('Location: visualizar_produtos.php');
exit;

?>