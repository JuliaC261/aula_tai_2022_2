<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

	<a href="../index.php">Voltar</a>
		
		<h2>Formulário Cliente</h2>
		<form action="resultado.php" method="POST">
			<label for="nome">Nome</label>
			<input type="text" name="nome" placeholder="John" />
			</br>
			<label for="cpf">CPF</label>
			<input type="text" name="cpf" placeholder="000.000.000-00" />
			</br>
			<label for="telefone">Telefone</label>
			<input type="text" name="telefone" placeholder="(84) 98800-0055" />
		</br>
			<label for="sexo">Sexo</label>
			<input type="radio" name="sexo" value="M"/>Masculino
			<input type="radio" name="sexo" value="F"/>Feminino
			<input type="radio" name="sexo" value="Outros"/>Outros
			</br>
			<label for="marca">Marca</label>
			<input type="checkbox" name="marca1" value="ford"/>Ford
			<input type="checkbox" name="marca2" value="Vw"/>Vw
			<input type="checkbox" name="marca3" value="volvo"/>Volvo
			</br>
			<input type="submit" value="Salvar" />
		</form>
  </body>
</html>