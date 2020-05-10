<!DOCTYPE html>
<html>
<head>
	<link rel = "shortcut icon" href = "patinha.png"/>
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta charset="utf-8">
	<title>Pet Amigo</title>
</head>
<body>
	<center>
		<div id="form-cad"class="-secondary">
		<h2>Cadastrar pet</h2>
			<form action="pets.php" method="POST">
				<label>Raça</label>
				<input type="text" name='raça'><br> <br>
				<label>Idade</label>
				<input type="text" name='idade'><br> <br>
				<input type="button" name="enviar" value="Enviar">
				<input type="button" name="cancelar" value="Cancelar"> 
			</form>
		</div>
	</center>
</body>
<?php
	
	$raca = $_POST['raça'];
	$idade = $_POST['idade'];

	echo "$raca","\n";
	echo "$idade","\n";

?>
</html>