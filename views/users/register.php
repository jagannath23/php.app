<br><br><div class="card">
	<div class="card-header">
		<h3 class="card-title">Ingresa tus datos:</h3>
	</div>
	<div class="card-body">
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Correo</label>
				<input type="text" name="email" class="form-control">
			</div>		
			<div class="form-group">
				<label>Contraseña</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="text-right">
				<input class="btn btn-primary" type="submit" name="submit" value="Enviar">
			</div>
		</form>
	</div>
</div>