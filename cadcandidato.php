<?php
	require_once 'dbfuncoes.php';
?>
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
		<div id="form-cad" class="-secondary">
		<h2>Cadastre-se</h2>
			<form action="candidato.php" method="POST">
				<input type="text" name='nome' placeholder="Digite seu nome completo"><br> <br>
				<input type="text" name='idade' placeholder="Digite sua idade"><br> <br>
				<input type="text" name='endereço' placeholder="Digite seu endereço"><br> <br>
				<input type="text" name='telefone' placeholder="Digite seu telefone"><br> <br>
				<input type="text" name='email' placeholder="Digite seu email"><br> <br>
				<input type="password" name='senha' placeholder="Digite sua senha"><br> <br>
				<input type="submit" name="enviar" value="Enviar">
				<input type="submit" name="cancelar" value="Cancelar"> 
			</form>
		</div>
	</center>
</body>
<?php
	
	isset($_POST['nome']){
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$endereco = $_POST['endereço'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if (!empty($nome) && !empty($idade) && !empty($endereco) && !empty($telefone) && !empty($email) && !empty($senha)){
		
	}else{
		echo "Preencha todos os campos!";
	}
}

?>
</html>