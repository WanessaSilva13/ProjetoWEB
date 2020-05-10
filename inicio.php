<html>
<head> <link rel = "shortcut icon" href = "patinha.png"/>
<meta charset = "utf-8" />
<title>Pet Amigo</title>
<link rel="stylesheet" href="inicio.css"/>
</head>
<body>
<div id='banner'>
<img src =".jpg"/> 
</div>
<div id='menu'>
<ul>
<li><a href = "index.php">Inicio</a></li>
<li><a href = ".php"> </a></li>
<li><a href = ".php"> </a ></li>
<li><a href = ".php"> </a></li>
</ul></div>
<div id='conteudo'>
<br></br>
<img src=".jpg">
<br></br>
<a href= ".html"> </a>
<br></br>
</div>
<div id=''>

<img src=".jpg">
<br></br>
<a href= ".html"></a>
<br></br>
</div>

<div id='rodape'>
</div>
</body>
</html>

<?php
	include 'dbfuncoes.php';
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$db = 'adocao';

	setConexao($servidor, $usuario, $senha, $db);

	$sql = "SELECT * FROM pets";
	$dados = consultarSQL($sql);
?>
<select name="pets" id=" ">
	<?php foreach($dados as $linha){ ?>
		<option value=""><?=$linha['raça']?></option>
	<?php } ?>
</select>