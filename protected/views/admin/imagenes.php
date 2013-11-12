<?php  ?>

<div class="span-14">
	<h1>Imagenes Subidas</h1>	

	<?php foreach ($imagenes as $img) { ?>
		<p>
			ID : <?php echo $img->id ?><br>
			<b><?php echo $img->name; ?></b><br>
			<img src="<?php echo yii::app()->request->baseUrl.'/images/'.$img->filename ?> " width="400px" height="250px">
		</p>
	<?php } ?>
</div>

<div class="span-10 last">
	<h3>Subir Imagen</h3>
	<form id="form-image" name="form-image" method="post" action="<?php echo yii::app()->request->baseUrl?>/admin/subirImagen" enctype="multipart/form-data">
		<p>
			Nombre:
			<input type="text" name="name" id="name" /><br>
			<input type="file" name="imagen"/><br>
			<input type="submit" name="Aceptar" id="Aceptar" value="Aceptar" />
		</p>
		<p>&nbsp;</p>
	</form>
</div>


