<?php ?>


<div class="span-14">
	<div class="content">
		<h1>Trabajos realizados</h1>
		<table>
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Fecha</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<!-- Fila de querys -->
				<tr>
					<form id="trabajo-form" method="POST" action="<?php echo yii::app()->baseUrl.'/admin/trabajos/' ?>">
						<td><input onkeypress="enviar(event,this.form)" name="title" type="text" placeholder="titulo"></td>
						<td><input name="date" type="radio" value="ASC">asc 
							<input name="date" type="radio" value="DESC">desc</td>
						<input type="submit" style="display:none">
						<td>Eliminar</td>
					</form>
				</tr>
			<?php foreach ($trabajos as $key => $trabajo) {?>
				<tr>
					<td><a href="<?php echo yii::app()->baseUrl.'/admin/trabajos/'.$trabajo->id ?>"><?php echo $trabajo->title ?></a></td>
					<td><?php echo date_format(date_create($trabajo->date),'d/m/y') ?></td>
					<td><a href="<?php echo yii::app()->baseUrl.'/admin/deleteTrabajo/'.$trabajo->id ?>">eliminar</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
</div>

<div class="span-10 last">
	<div class="content">
		<h3>Subir Trabajo</h3>
		<form method="POST" action="<?php echo yii::app()->request->baseUrl?>/admin/createTrabajo" enctype="multipart/form-data">
			Titulo: <input type="text" name="trabajo[title]" style="width:307px;" required/><br>
			Seleccione una categoria
			<select name="categoria">
				<?php foreach ($categorias as $key => $val) { ?>
					<option value="<?php echo $val->id ?>"><?php echo $val->name ?></option>
				<?php } ?>
			</select><br>
			Descripcion: <br>
			<textarea rows="15" cols="41" name="trabajo[body]" required></textarea><br>

			<b>Elija las imagenes</b>
			<div id="subirImagenes">
				<div class="formImagen">
					Nombre:<input type="text" name="name[]" style="width:297px;" /><br>
					<input type="file" name="file[]" required/><br>
				</div>
			</div>
			<br>
			<a id="agregarImagen">Agregar otra imagen</a><br><br>

			<input type="submit" name="aceptar" value="Aceptar" />
		</form>
	</div>
</div>

<script type="text/javascript">
	$("input[value='<?php echo $dateChecked ?>']").attr('checked',true);

	$("#agregarImagen").click(function (){
		$("#subirImagenes").append("<div class='formImagen'>Nombre:<input type='text' name='name[]' style='width:297px;' /><br><input type='file' name='file[]' required/><br></div>");
	});

	function enviar(e, form) {
		tecla=(document.all) ? e.keyCode : e.which;
		if(tecla==13) form.submit();
	}
</script>