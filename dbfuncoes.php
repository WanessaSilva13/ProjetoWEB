<?php
$con;
function setConexao($servidor, $usuario, $senha,$database){
	global $con;
	$con = new mysqli($servidor,$usuario, $senha, $database);
	if(mysqli_connect_errno()){
		echo "Erro na conexão: " .mysqli_connect_error();
		echo "<br>";
	}
}

function consultarSQL($sql){//select
	global $con;
	$resultado = $con->query($sql);
	$linhas = array();
	while($dados = $resultado->fetch_array()){
		$linhas[] = $dados;
	}
	return $linhas;
}

function executarSQL($sql){//update, delete ou insert
	global $con;
	$resultado = $con->query($sql);
	return $resultado;
}
function cadastrarCand($nome,$idade,$endereco,$telefone,$email,$senha){
	global $con;
	$sql = $con -> prepare("SELECT id_nome FROM candidatos WHERE email = email");
	$sql -> bindValue("email", $email);
	$sql -> execute();
	if ($sql -> rowCount() > 0) {
		return false;
	}else{
		$sql = $con -> prepare("INSERT INTO candidatos (nome,idade,endereco,telefone,email,senha) VALUES ($nome,$idade,$endereco,$telefone,$email,$senha)")
		$sql -> bindValue("nome", $nome);
		$sql -> bindValue("idade", $idade);
		$sql -> bindValue("endereco", $endereco);
		$sql -> bindValue("telefone", $telefone);
		$sql -> bindValue("email", $email);
		$sql -> bindValue("senha", $senha);
		$sql -> execute();
		return true;
	}
}
function cadastrarPet($raca,$idade){
	global $con;
	$sql = $con -> prepare("SELECT id_raça FROM pets WHERE raça = raca AND idade = idade");
	$sql -> bindValue("raça", $raca);
	$sql -> bindValue("idade", $idade);
	$sql -> execute();
	if ($sql -> rowCount() > 0) {
		return false;
	}else{
		$sql = $con -> prepare("INSERT INTO pets (raca,idade) VALUES ($raca,$idade)")
		$sql -> bindValue("raca", $raca);
		$sql -> bindValue("idade", $idade);
		$sql -> execute();
		return true;
	}	
}
function logar($email,$senha){
	global $con;
	$sql = $con -> prepare("SELECT id_nome FROM candidatos WHERE email = email AND senha = senha");
	$sql -> bindValue("email", $email);
	$sql -> bindValue("senha", $senha);
	$sql -> execute();
	if ($sql -> rowCount() > 0) {
		$dado = $sql -> fetch_array();
		session_start();
		$_SESSION['id_nome'] = $dado['id_nome'];
		return true;
	}else{
		return false;
	}	
}
?>