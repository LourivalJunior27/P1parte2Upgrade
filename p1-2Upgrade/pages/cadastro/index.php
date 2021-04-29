<?php 
require_once '../connection.php';
require_once './cadastro.php';
require_once './ler.php'; ?>

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

			<form class="card card-cadastro col-4" action="" method="POST" enctype="multipart/form-data">
				<h5 class="text-center font-weight-bold font-italic mt-1" for="">Dados para Cadastro</h5>

				<!-- LOGIN -->
				<label class="sr-only" for="inlineFormInputGroup">Login</label>
				<div class="input-group mt-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-sign-in-alt"></i></div>

					</div>
					<input type="text" class="form-control card-input" name="login" id="login" placeholder="Login...">
				</div>

				<!-- EMAIL -->
				<label class="sr-only" for="inlineFormInputGroup">Email</label>
				<div class="input-group my-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="far fa-envelope"></i></div>

					</div>
					<input type="text" class="form-control card-input" name="email" id="email" placeholder="E-mail...">
				</div>

				<!-- SENHA -->
				<label class="sr-only" for="inlineFormInputGroup">Senha</label>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
					</div>
					<input type="text" class="form-control card-input" name="senha" id="senha" placeholder="Senha...">
				</div>

				<!-- AVATAR -->
				<label class="sr-only" for="inlineFormInputGroup">Avatar</label>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="far fa-user-circle"></i></div>
					</div>
					<input type="file" class="form-control card-input" name="avatar" id="avatar" placeholder="Avatar..." accept='image/*'>
				</div>

				<!-- BOTOES -->
				<div class="text-center mt-3">
					<button type="submit" name="voltar" class="btnVoltar col-5 mx-2 mb-2">Voltar</button>
					<button type="submit" name="salvar" class="btnPublicar col-5 mx-2 mb-2">Salvar <i class="far fa-save"></i></button>
					<div class="col-3">
				</div>
				</div>

		</article>
	</div>
</body>

</html>
