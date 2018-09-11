<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Sistema Login - William Alves</title>
		<link href="css/estilo.css" rel="stylesheet">
	</head>
	<body>
		<div id="div-centro-pass">
			<div id="div-meio-pass">
				<form action="forgot-pass.php" method="post" name="form-forgot">
					<h2>Recover Password</h2>
					<div id="enviar-email">
						<p class="forgot-pass">Enter the email address registered in the system:</p>
						<div class="recupera_senha">
							<label for="email">Email Address:</label>
							<input type="text" id="email" name="email" value="" placeholder="Email">
						</div>
					</div>
					<input type="submit" name="esqueci-senha" id="botao-esqueci" value="Recover Password">

					<div class="div-back-login-pass">
						<a href="index.php" class="letra back-login">Back to Login</a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>