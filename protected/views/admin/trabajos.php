<?php ?>


<div class="span-14">
	<div class="content">
		<h1>Trabajos realizados</h1>
		<?php foreach ($trabajos as $item) { ?>
		<p>
			<b><?php echo $item->title; ?></b> <em><?php echo $item->date ?></em> <br>
			<?php echo $item->body; ?><br>
			<?php foreach ($item->imagenes as $img) { ?>
				<?php echo $img['name'] ?><br>
				<img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$img['filename']; ?>" width="400px" height="250px" ><br>
			<?php } ?>
		</p>
		<?php } ?>
	</div>
</div>

<div class="span-10 last">
	<div class="content">
		<h3>Subir Trabajo</h3>
		<form name="trabajo-form" method="post" action="<?php echo yii::app()->request->baseUrl?>/admin/subirTrabajo">
			<p>
				Titulo: <input type="text" name="title"/><br>
				Descripcion: <br>
				<textarea rows="15" cols="42" name="body"></textarea><br>
				Seleccione las imagenes: <br>
				
				<?php foreach ($imagenes as $key => $img) { ?>
					<input type="checkbox" name="gp-imgs[]" value="<?php echo $img->id ?>"><?php echo $img->name ?></input><br>
				<?php } ?>

				<input type="submit" name="Aceptar" value="Aceptar" />
			</p>
		</form>
	</div>
</div>
