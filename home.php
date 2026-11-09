<?php
session_start();
?>

<!doctype html>
<html>
 <head>
 <meta charset="UTF-8" />
 <title>Loja Teste</title>
 <link href="style.css" rel="stylesheet" />

 </head>

 <body>

 <h1>Loja teste!</h1>
 <h2><?php echo "Bem vindo(a) " . $_SESSION['email']?></h2>
 <h2>O que gostaria de fazer?</h2>


<a href="formulario_cadastro.php"><button>Cadastrar Produto</button></a>
<a href="visualizar_produtos.php"><button>Visualizar Produtos</button></a>

 </body>

 <script src="script.js"></script>

</html>
