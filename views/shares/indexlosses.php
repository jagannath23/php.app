<div><br>
<?php if (count($view_model) > 0) : 
	foreach ($view_model as $item) : ?>
		<div class="card">
			<img class="card-img-top" src="">
			<div class="card-body text-center">
				<h5 class="card-title"><?php echo $item['pet_name']; ?></h3>
				<small><?php echo $item['create_date']; ?></small><hr/>
				<p class="card-text"><?php echo $item['description']; ?></p><br>
				<a class="btn btn-primary" href="<?php echo ROOT_PATH.'shares/show/'.$item['id']; ?>">Ver más</a>
			</div>
		</div><br>
	<?php endforeach; 
	if (isset($_SESSION['is_logged_in']) and !$_SESSION['user_data']['admin']) : ?>
	<div class="text-right">
		<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH;?>shares/add">Publicar aviso</a>
	</div>
	<?php endif; ?><br><br><br><br>
<?php else : ?>
	<h3>No hay anuncios publicados</h3>
	<?php if (isset($_SESSION['is_logged_in']) and !$_SESSION['user_data']['admin']) : ?>
		<div class="text-right">
			<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH;?>shares/add">Publicar aviso</a>
		</div>
	<?php endif; ?><br><br><br><br>
<?php endif; ?>
</div>