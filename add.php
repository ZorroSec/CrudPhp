<?php
	include_once('config.php');
	if(isset($_POST['submit'])){
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];
		$RESULT = $conexao->query("INSERT INTO estudantes(nome,idade) VALUES ('$nome','$idade')");
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>
		Crud Estudantes - Adicionar
	</title>
</head>
<body>
	<h1 style="text-align: center;">Crud Estudantes</h1>

	<div class="row">
		<form action="add.php" method="POST">
			<div class="col-xs-6">
				<input type="text" name="nome" id="nome" placeholder="nome" class="form-control">
			</div>
			<div class="col-xs-6">
				<input type="text" name="idade" id="idade" placeholder="idade" class="form-control">
			</div>
			<br>
			<div class="col-xs-12" style="text-align: center;">
				<input type="submit" id="submit" name="submit" value="Enviar">
			</div>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>