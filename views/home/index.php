<br><br><div class="text-center">
<h1>Bienvenido a Buscando Mascotas</h1><br>
<p class="lead">Publica o encuentra aquí tu mascota perdida</p>
<a class="btn btn-primary text-center" href="<?php echo ROOT_PATH;?>shares">Ver anuncios</a><br><br>
<h4>
<?php if (isset($_SESSION['is_logged_in'])) : ?>
	<a class="nav-link" href="<?php echo ROOT_URL; ?>">Hola <?php echo $_SESSION['user_data']['name']; ?><span class="sr-only"></span></a>
	<a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Salir</a>
<?php else : ?>	
	<a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Iniciar sesión<span class="sr-only"></span></a>
	<a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Registrarse</a>
<?php endif; ?>
</h4>
</div>