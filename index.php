<?php
	include_once('config.php');
	$read = $conexao->query("SELECT * FROM estudantes");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Crud Estudantes</title>
</head>
<body>
	<h1 style="text-align: center;">Crud Estudantes</h1>
	<a href="add.php">Adicionar Estudante</a>
	<div class="conteiner">
		<div class="col-xs-12">
			<table class="table">
				
				<thead>
					<tr>
						<th>Nome</th>
						<th>Idade</th>
						<th>Acoes</th>
					</tr>
				</thead>
				<tbody>
					<?php while($estudante = mysqli_fetch_assoc($read)) { ?>
						<tr>
							<td><?php echo $estudante['nome']; ?></td>
							<td><?php echo $estudante['idade']; ?></td>
							<td><?php echo $estudante['id']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>