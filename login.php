<?php

session_start();

include('conexao.php'); 

$email = $_POST["email"];
$senha = $_POST["senha"];

$result = $mysqli->query("SELECT * FROM funcionarios WHERE email = '$email' and senha = '$senha'");

if ($result->num_rows>0){
    $_SESSION['email'] = $email;

    header("Location:home.php");
} else {
    echo "Erro no login.";
}

?>

