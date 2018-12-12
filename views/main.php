<!DOCTYPE html>
<html>
<head>
	<title>Panel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/css/style.css">

</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Buscando Mascotas</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo ROOT_PATH;?>shares/indexlosses">Pérdidas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo ROOT_URL; ?>shares/indexencounters">Encuentros</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo ROOT_URL; ?>shares/index">Anuncios</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<?php if (isset($_SESSION['is_logged_in'])) : ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo ROOT_URL; ?>">Bienvenido <?php echo $_SESSION['user_data']['name']; ?><span class="sr-only"></span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Salir</a>
				</li>
				<?php else : ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Iniciar sesión<span class="sr-only"></span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Registrarse</a>
				</li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>
	<main role="main" class="container">
		<div><br>
			<?php Messages::display(); ?>
			<?php require($view); ?>
		</div>
	</main>
	<footer class="container">
		<div><hr>
			<h4>Programación I</h4>
			<h5>Castellano Juan I</h5>
		</div>
	</footer>
</body>
</html>