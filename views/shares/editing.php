<div class="card">
	<div class="card-header">
		<h3 class="card-title">Edita los campos necesarios:</h3>
	</div>
	<div class="card-body">
		<form method="POST" action="<?php echo ROOT_PATH.'shares/edit/'.$view_model['id'];?>">		
			<div class="row">
				<div class="col">
					<input type="text" name="pet_name" class="form-control" value="<?php echo $view_model['pet_name'] ?>">		
				</div>
				<div class="col">
					<input type="text" name="description" class="form-control" value="<?php echo  $view_model['description']?>"></textarea>
				</div>
			</div><br>
			!!! Vuelve a seleccionar estos:
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
					<label>Lugar</label>
					<input type="text" name="place" class="form-control" value="<?php echo $view_model['place']?>">
				</div>
			</div><br>		
			<div class="row">
				<div class="col">
					<label>Raza</label>
					<input type="text" name="kind_pet" class="form-control" value="<?php echo $view_model['kind_pet']?>">	
				</div>
				<div class="col">
					<label>Recompensa</label>
					<input type="text" name="reward" class="form-control" value="<?php echo $view_model['reward']?>">
				</div>
			</div><br>		
			<div class="form-group">
				<label>Teléfono</label>
				<input type="text" name="telephone" class="form-control" value="<?php echo $view_model['telephone']?>">
			</div>
			<div class="form-group">
				<label for="thumb">Carga una foto</label>
				<input type="file" name="thumb" class="form-control-file" id="thumb">
			</div>
			<div class="text-right">
				<input class="btn btn-primary" type="submit" name="submit" value="Enviar">
				<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancelar</a>
			</div>
		</form>
	</div>
</div><br><br><br>