<?php
session_start();
	include("conexao/conecta.php");
	 
	if(isset($_REQUEST["post_back"])){
	 
	    if(empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["usuario"]) || empty($_POST["senha"])){
	   
	        echo "<script>alert(‘Preencha todos os campos antes de enviar seu cadastro!’);</script>";  
	   
	    }else{
	        $tb = $conn->prepare("insert into login(nm_login, email_login, usuario_login, senha_login) values(:nome, :email, :usuario, :senha)");
	        $tb->bindParam(":nome", $_POST["nome"], PDO::PARAM_STR);
	        $tb->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
	        $tb->bindParam(":usuario", $_POST["usuario"], PDO::PARAM_STR);
	        $tb->bindParam(":senha", $_POST["senha"], PDO::PARAM_STR);
	        $tb->execute();
	        $tb = null;
	       
	        echo "Cadastro feito com sucesso.";
	       
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
				<form method="post" action="cadastro.php">
					<label class="cadastra-nome">Nome: </label><input type="text" name="nome" id="cadastra-nome"><br>
					<label class="cadastra-email">Email: </label><input type="text" name="email" id="cadastra-email"><br>
					<label class="cadastra-usuario">Usuario: </label><input type="text" name="usuario" id="cadastra-usuario"><br>
					<label class="cadastra-senha">Senha: </label><input type="password" name="senha" id="cadastra-senha"><br>
					<input type="submit" value="Creating Account" id="botao-cadastrar" name="cadastrar">
				</form>
			</div>
		</div>
	</body>
</html>