<?php
	include_once("conexao/conecta.php");

	if(@$_GET['go'] == 'cadastrar'){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$user = $_POST['usuario'];
		$pwd = $_POST['senha'];

		if(empty($nome)){
			echo "All fields must be filled!";
		}elseif(empty($email)){
			echo "All fields must be filled!";
		}elseif(empty($user)){
			echo "All fields must be filled!";
		}elseif(empty($pwd)){
			echo "All fields must be filled!";
		}else{
			$query1 = mysql_num_rows(@mysql_query("SELECT * FROM login WHERE login = '$user'"));
			if($query1 == 1){
				echo "This user already exists.";
			}else{
				@mysql_query("isert into login (nome, email, usuario, senha) values ('$nome','$email','$user','$pwd')");
				echo "User successfully registered!";
				header("Location: index.phtml")
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Sistema Login - William Alves</title>
		<link href="css/estilo.css" rel="stylesheet">
	</head>
	<body>
		<div id="div-centro-inserir">
			<div id="div-meio-inserir">
				<h2>Creating new account</h2>
				<p class="criar-conta">Enter the information below</p>
				<form method="POST" action="?go=cadastrar">
					<label class="cadastra-senha">Nome: </label><input type="text" name="nome" id="cadastra-nome"><br>
					<label class="cadastra-senha">Email: </label><input type="text" name="email" id="cadastra-email"><br>
					<label class="cadastra-email">Usuario: </label><input type="text" name="usuario" id="cadastra-usuario"><br>
					<label class="cadastra-senha">Senha: </label><input type="password" name="senha" id="cadastra-senha"><br>
					<input type="submit" value="Creating Account" id="botao-cadastrar" name="cadastrar">
				</form>
			</div>
		</div>
	</body>
</html>