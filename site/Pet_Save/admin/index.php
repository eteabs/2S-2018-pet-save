<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<title>Login</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../src/styles.css" type="text/css" />
    </head>

    <body>
		<form name="form" method="post" action="config/_login.php">
			<section id="email">
				<label>E-mail:</label> <br />
				<input class="campo" type="email" name="email" />
			</section>

			<section id="senha">
				<label>Senha:</label> <br />
				<input class="campo" type="password" name="senha" required />
			</section>

			<section id="btnEnviar">
				<input class="btnEnviar" type="submit" value="Enviar" />
			</section>
		</form>
    </body>
</html>