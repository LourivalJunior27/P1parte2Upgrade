<?php 
require_once '../connection.php';
require_once './ler.php';
require_once './login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
	<link rel="stylesheet" href="./styles/style.css">

	<title>Cadastro</title>
</head>

<body>
	<div class="container-fluid">
		<article class="row justify-content-around mt-3">

			<form class="card card-cadastro col-3" action="" method="POST">
				<h5 class="text-center font-weight-bold font-italic mt-1" for="">Dados para Login</h5>

				<!-- LOGIN -->
				<label class="sr-only" for="inlineFormInputGroup">Login</label>
				<div class="input-group my-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="far fa-user-circle"></i></div>

					</div>
					<input type="text" class="form-control card-input" name="login" id="login" placeholder="Login...">
				</div>

				<!-- SENHA -->
				<label class="sr-only" for="inlineFormInputGroup">Senha</label>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
					</div>
					<input type="text" class="form-control card-input" name="senha" id="senha" placeholder="Senha...">
				</div>
				<span id="span"><?php echo isset($_SESSION['error']) ? $_SESSION['error'] : ''; ?></span>

				<!-- BOTOES -->
				<div class="text-center mt-3">
					<button type="submit" name="voltar" class="btnVoltar" >Voltar</button>
					<button type="submit" name="salvar" class="btnPublicar col-5 mx-2 mb-2">Entrar <i class="fas fa-sign-in-alt"></i></button>
			</div>
				
				<hr>
				<p><a href="../cadastro/index.php">Click aqui para Cadastrar!</a></p>
	</div>
	</form>

	</article>
	</div>
</body>

</html>
