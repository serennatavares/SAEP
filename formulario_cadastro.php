<?php
include('conexao.php');

$result = $mysqli->query("SELECT * FROM funcionarios");
?>

<!doctype html>
<html>
 <head>
 <meta charset="UTF-8" />
 <title>Cadastro Produtos</title>
 <link href="style.css" rel="stylesheet" />

 </head>

 <body>

 <h1>Faça cadastro aqui:</h1>

<form action="cadastro_produto" method="post" class="cadastro_produto">

 <label for="nome">Nome: </label>
 <input type="text" name="nome" id="nome" required />

 <label for="peso">Peso: </label>
 <input type="number" name="peso" id="peso" required />

 <label for="id_funcionario">Funcionário: </label>
 <select name="id_funcionario">

 <option value="">Selecione</option>

 <?php while ($funcionaro = $result->fetch_assoc()) { ?>
 <option value="<?php echo $funcionario['id_funcionario']; ?>"> <?php echo $funcionario['nome']; ?></option>

 <?php } ?>

</select>

 <button type="submit">Cadastrar</button>

</form>


 </body>

 <script src="script.js"></script>

</html>
