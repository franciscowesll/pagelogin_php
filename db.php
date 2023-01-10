<?php
$host = 'localhost';
$port = '3306';
$db = 'primeira_tentativa';
$user = 'root';
$password = '';

$connection = mysqli_connect($host,$user,$password,$db);
 $email = $_POST['email'];
 $passwd = $_POST['passwd'];
 
 if(isset($email) && isset($passwd)){
 	$query = "SELECT * FROM cadastro WHERE email = '".$email."'";
 	$resultado = mysqli_query($connection, $query);

 	if ($resultado) {
 		$row = mysqli_fetch_array($resultado);
 		$res_passwd = $row['passwd'];
 		$res_nome = $row['nome'];
 		$res_endere = $row['address'];
 		$res_city = $row['city'];

 		if ($res_passwd == $passwd){
 			echo "<p> Usúario: ".$res_nome."</p>";
 			echo "<p> Endereço: Rua ".$res_endere."</p>";
 			echo "<p> Cidade: ".$res_city."</p>";
 			echo "<p> E-mail: ".$email."</p>";
 		} else {
 			echo "<p>Senha incorreta</p>";
 		}
 	} else {
 		echo "<p> Usuário não encontrado</p> ";
 	}
 
 	
 } else {
 	echo "<h1> Digite o email e a senha</h1>";
 }

 ?>