<?php
	//Obter valores para o login.php
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	//---
	$usuario = stripcslashes($usuario);
	$senha = stripcslashes($senha);
	
	$db = mysqli_connect("localhost","root","","login");

	$result = mysqli_query($db,"select * from usuarios where usuario = '$usuario' and senha = '$senha'") or die ("Falha ao conectar com o banco " .mysql_error());
	$row = mysqli_fetch_array($result);
	if ($row['usuario']== $usuario && $row['senha'] == $senha) {
		echo "Login realizado com sucesso!! Bem-Vindo ao sistema:  " .$row['usuario'];
		} else{
			echo "Falha ao conectar!!";
		}
	
?>