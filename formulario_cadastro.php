<!doctype html>
<html>
 <head>
 <meta charset="UTF-8" />
 <title>Formulário Cadastro de Produtos</title>
 <link href="style.css" rel="stylesheet" />
 </head>

 <body>
    <h1>Cadastro de Produtos</h1>

   <form action="cadastro_produto.php" method="post">

 <label for="nome">Nome:</label>
 <input name="nome" id="nome" type="text">

 <label for="preco">Preço:</label>
 <input name="preco" id="preco" type="number">

 <label for="quantidade">Quantidade:</label>
 <input name="quantidade" id="quantidade" type="number">

 <label for="status_produto">Status:</label>
 <select name="status_produto">
 <option value="Disponível">Disponível</option>
 <option value="Selecione" selected>Selecione</option>
 <option value="Indisponível">Indisponível</option>
</select>


 <button type="submit">Enviar</button>
</form>

    <script src="script.js"></script>
    
 </body>

</html>