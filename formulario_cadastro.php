<!doctype html>
<html>
 <head>
 <meta charset="UTF-8" />
 <link href="style.css" rel="stylesheet" />
 <title>Formulário Cadastro Produtos</title>
 </head>

 <body>

 <h1>Cadastro de Produtos</h1>

 <form action="cadastro_produto.php" method="POST">

 <label for="nome">Nome:</label>
 <input type="text" name="nome" id="nome" required />

 <label for="preco">Preço:</label>
 <input type="number" name="preco" id="preco" required />

 <label for="quantidade">Quantidade:</label>
 <input type="number" name="quantidade" id="quantidade" required />

 <label for="status_produto">Status:</label>
 <select name="status_produto">
 <option value="Disponível">Disponível</option>
 <option value="Selecione" selected>Selecione</option>
 <option value="Indisponível">Indisponível</option>
</select>

<input type="submit" value="Enviar">

</form>


   <script src=script.js></script>

 </body>


</html>
