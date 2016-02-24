<?php
session_start();
	include("conexao/conecta.php");
	 
	if(isset($_REQUEST["cadastrando"])){
	 
	    if(empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["usuario"]) || empty($_POST["senha"])){
	   
	        echo "<p class='menssagem'>Preencha todos os campos antes de enviar seu cadastro!<p>"; 
	   
	    }else{
	        $tb = $conexao->prepare("insert into login(nome, email, usuario, senha) values(:nome, :email, :usuario, :senha)");
	        $tb->bindParam(":nome", $_POST["nome"], PDO::PARAM_STR);
	        $tb->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
	        $tb->bindParam(":usuario", $_POST["usuario"], PDO::PARAM_STR);
	        $tb->bindParam(":senha", $_POST["senha"], PDO::PARAM_STR);
	        $tb->execute();
	        $tb = null;
	       
	        echo "<p class='menssagem' style='color: green;'>Cadastro feito com sucesso.";
	        header("Refresh: 2, index.phtml");
	       
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
					<input type="submit" value="Creating Account" id="botao-cadastrar" name="cadastrando">
				</form>
				<div class="div-back-login">
					<a href="index.phtml" class="letra back-login">Back to Login</a>
				</div>
			</div>
		</div>
	</body>
</html>