<?php
	include 'dbfuncoes.php';
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$db = 'adocao';

	setConexao($servidor, $usuario, $senha, $db);

	$sql="insert into pets (raça, idade) values('Vira lata', '3 meses')";
	executarSQL($sql);

	//$sql="UPDATE aluno SET nome = 'Paulo Samuel' WHERE id = 4";
	//executarSQL($sql);

	//$sql="DELETE FROM aluno WHERE id = 2";
	//executarSQL($sql);

	$sql = "SELECT * FROM pets";
	$dados = consultarSQL($sql);
	foreach($dados as $linha){
		echo $linha['Id'].'-';
		echo $linha['raça'].'<br>';
		echo $linha['idade'].'<br>';

	}
	

?>