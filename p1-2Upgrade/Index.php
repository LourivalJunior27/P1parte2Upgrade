<?php
require_once './pages/connection.php';
require_once './pages/cadastro/ler.php';
require_once './pages/comentarios/create.php';
require_once './pages/comentarios/read.php';
require_once './pages/comentarios/delete.php';
require_once './pages/login/logout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
	<link rel="stylesheet" href="./styles/style.css">
<title>P1 Comentários</title>
</head>

<body>
	<div class="container-fluid">
		<article class="row justify-content-around mt-3">
			<div class="card">
			<form action="" method="POST">
				<h3>P1 - Parte 2</h3>

				<?php if (!isset($_SESSION['id'])) {  ?>
					<div>
						<img class="imgLogin" src=<?php echo "./images/avatar.png"; ?> alt="Imagem de avatar do usuário">
						<span class="login"><?php echo "Anônimo" ?></span>
						<a href="./pages/login/index.php" class="btnLogout"> Login <i class="far fa-user-circle"></i></a>
					</div>

				<?php } else { ?>
					<div>
						<img class="imgLogin" src=<?php echo "./pages/cadastro/img/{$_SESSION['avatar']}"; ?> alt="Imagem de avatar do usuário">
						<span class="login"><?php echo $_SESSION['login'] ?></span>
						<button type="submit" name="btnLogout" class="btnLogout"> Logout <i class="far fa-user-circle"></i></button>
					</div>
				<?php } ?>

				</form>

				<img class="img" src="./images/wallpaper.jpg" alt="Imagem de fundo">

				<h5 class="" for="">Deixe Seu Comentário</h5>

				<!-- PUBLICAÇÃO -->
				<form class="publicacoes" action="" method="POST">
					<div class="comentarios">
						<img src="<?php echo isset($_SESSION['id']) ? "./pages/cadastro/img/{$_SESSION['avatar']}" : "./images/avatar.png"; ?>" class="avatar" alt="meu avatar">
						<textarea class="comentario" name="comentario" placeholder="Insira seu comentário aqui..."></textarea>
						<button class="btnPublicar" name="btnPublicar" type="submit">Publicar</button>
					</div>
					<!-- FINAL PUBLICAÇÃO -->

					<hr class="">

					<!-- COMENTARIO -->
					<?php if (!empty(read())) {
						foreach (read() as $value) { ?>
							<div>
								<div class="comentarios">
									<img style="width: 100px; height: 100px;" src="<?php echo $value->avatar ? "./pages/cadastro/img/{$value->avatar}" : "./images/avatar.jpg" ?>" class="avatar" alt="meu avatar">
									<div>
										<h5 class="dadosUsuario"><?php
																							$date = new DateTime($value->dataComentario);
																							$date->modify('-3 hour');
																							echo ($value->login ? $value->login : "Anônimo") . ' ' . $date->format('d/m/Y - H:i:s') ?></h5>
										<p class="comentario"><?php echo $value->comentario ?></p>
									</div>
									<!-- BOTOES -->
									<div class="botoes">
										<?php if (isset($_SESSION['id']) == $value->id) { ?>
											<button type="submit" name="btnExcluir" class="btnExcluir" value="<?php echo $value->idComentario ?>">Excluir <i class="fas fa-ban"></i></button>
										<?php } ?>
									</div>
								</div>
								<hr>
							</div>
					<?php }
					}
					?>
				</form>
		</article>
	</div>
</body>

</html>
