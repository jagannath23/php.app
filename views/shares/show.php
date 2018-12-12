<div><br>
	<div class="card">
		<div class="card-body text-center">
			<h5 class="card-title"><?php echo $view_model['pet_name']; ?></h3>
			<small><?php echo $view_model['create_date']; ?></small><hr/>
			<p class="card-text"><?php echo $view_model['description']; ?></p>
			<span>Edad: <?php echo $view_model['age']; ?></span><br>
			<span>Sexo: <?php echo $view_model['age']; ?></span><br>
			<?php if ($view_model['is_loss']) : ?>
			<span>Fecha de pérdida: <?php echo $view_model['encounter_loss_date']; ?><br>
			<?php else : ?>
			<span>Fecha de encuentro: <?php echo $view_model['encounter_loss_date']; ?></span><br>
			<?php endif; ?>
			<span>Lugar: <?php echo $view_model['place']; ?></span><br>
			<span>Raza: <?php echo $view_model['kind_pet']; ?></span><br>
			<span>Telefono: <?php echo $view_model['telephone']; ?></span><br>
			<span>Recompensa: <?php echo $view_model['reward']; ?></span><br><br>
			<a class="btn btn-primary" href="<?php echo $item['thumb']; ?>">Ver foto</a>
		</div>
	</div><br>
	<?php if (isset($_SESSION['is_logged_in']) and !$_SESSION['user_data']['admin']) : ?>
	<div class="text-right">
		<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH;?>shares/add">Publicar nuevo aviso</a>
		<?php if ($_SESSION['user_data']['id'] == $view_model['user_id']) : ?>
			<form method="POST" action="<?php echo ROOT_PATH.'shares/delete/'.$view_model['id'];?>">
				<input class="btn btn-danger" type="submit" name="submit" value="Eliminar">
			</form>
		<?php endif; ?>
	</div>
	<?php endif; ?><br><br><br><br>
</div>