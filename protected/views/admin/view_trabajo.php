<?php  ?>

<div class="span-18">
	<div class="content">
		<div class="post">
			<form method="POST" action="<?php echo yii::app()->request->baseUrl?>/admin/updateTrabajo" enctype="multipart/form-data">
				<input name="id" type="hidden" value="<?php echo $trabajo->id ?>">
				Titulo: <input type="text" name="update[title]" value="<?php echo $trabajo->title ?>"/><br>
				<div class="author"><?php echo date_format(date_create($trabajo->date),'d \d\e M Y - H:i') ?></div>
				Categoria
				<select name="categoria">
				<?php foreach ($categorias as $key => $val) { ?>
					<option value="<?php echo $val->id ?>"><?php echo $val->name ?></option>
				<?php } ?>
				</select><br>
				Descripcion: <br>
				<textarea rows="15" cols="42" name="update[body]"><?php echo $trabajo->body ?></textarea><br>

				<b>Imagenes</b>
				<div id="images">
				<?php foreach ($imagenes as $key => $img) { ?>
					<div class="img">
						<img src="<?php echo yii::app()->baseUrl.'/images/'.$img['filename'] ?>" width="200px" height="150px"/>
						<a onclick="eliminarImagen(this, <?php echo $img->id ?>)">eliminar</a><br>
					</div>
				<?php } ?>
				</div>
				<div id="subirImagenes">

				</div>
				<br>
				<a id="agregarImagen">Agregar otra imagen</a><br><br>

				<input type="submit" name="aceptar" value="Guardar" />
			</form>
		</div>
	</div>
</div>

<div class="span-6 last">
	<div id="sidebar">
		<div class="portlet">
			<div class="portlet-decoration">
				<div class="portlet-title">Opciones</div>
			</div>
			<div class="portlet-content">
				<ul>
					<li><a href="<?php echo yii::app()->baseUrl.'/admin/deleteTrabajo/'.$trabajo->id ?>">Eliminar</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(".post option[value='<?php echo $idCategoria ?>']").attr('selected',true);

	function eliminarImagen(ele, id){
		$("#images").append("<input name='idImgs[]' type='hidden' value="+id+">");
		$(ele).parent().remove();
	}

	$("#agregarImagen").click(function (){
		$("#subirImagenes").append("<div class='formImagen'>Nombre:<input type='text' name='name[]' /><br><input type='file' name='file[]' /><br></div>");
	});
</script>