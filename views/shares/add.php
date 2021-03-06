<div class="card">
	<div class="card-header">
		<h3 class="card-title">Completa los siguientes campos:</h3>
	</div>
	<div class="card-body">
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">		
			<div class="form-group">
				<label for="ad_type">Tipo de anuncio</label>
				<select class="form-control" id="ad_type" name="is_loss">
					<option value="1">Pérdida</option>
					<option value="0">Encuentro</option>
				</select>
			</div>
			<div class="row">
				<div class="col">
					<input type="text" name="pet_name" class="form-control" placeholder="Nombre de la mascota">		
				</div>
				<div class="col">
					<input type="text" name="description" class="form-control" placeholder="Descripción"></textarea>
				</div>
			</div><br>		
			<div class="row">
				<div class="col">
					<label for="age">Edad</label>
					<select class="form-control" id="age" name="age">
						<option value="cachorro">Cachorro</option>
						<option value="joven">Joven</option>
						<option value="adulto">Adulto</option>
					</select>		
				</div>
				<div class="col">
					<label for="genre">Sexo</label>
					<select class="form-control" id="genre" name="genre">
						<option value="macho">Macho</option>
						<option value="hembra">Hembra</option>
					</select>
				</div>
			</div><br>		
			<div class="row">
				<div class="col">
					<label>Fecha de encuentro o pérdida</label>
					<input type="date" name="encounter_loss_date" class="form-control">	
				</div>
				<div class="col">
					<label>Lugar</label>
					<input type="text" name="place" class="form-control">
				</div>
			</div><br>		
			<div class="row">
				<div class="col">
					<label>Raza</label>
					<input type="text" name="kind_pet" class="form-control">	
				</div>
				<div class="col">
					<label>Recompensa</label>
					<input type="text" name="reward" class="form-control">
				</div>
			</div><br>		
			<div class="form-group">
				<label>Teléfono</label>
				<input type="text" name="telephone" class="form-control">
			</div>
			<div class="text-right">
				<input class="btn btn-primary" type="submit" name="submit" value="Enviar">
				<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancelar</a>
			</div>
		</form>
	</div>
</div><br><br><br>