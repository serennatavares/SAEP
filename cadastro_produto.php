<?php

include('conexao.php');

$nome = $_POST["nome"];
$peso = $_POST["peso"];
$id_funcionario = $_POST["id_funcionario"];

$sql = "INSERT INTO produtos(nome, peso, id_funcionario) VALUES ('$nome', '$peso', '$id_funcionario')";

$mysqli->query($sql);

header('Location: home.php');
exit;

?>