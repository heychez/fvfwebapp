<?php  ?>

<div class="span-18">
	<div class="content">
		<div class="post">
			<div class="title"><?php echo $trabajo->title ?></div>
			<div class="author"><?php echo $trabajo->date ?></div>
			<div class="nav"><?php echo $trabajo->body ?></div>
			<div class="images">
				<?php foreach ($imagenes as $key => $img) { ?>
					<img src="<?php echo yii::app()->baseUrl.'/images/'.$img['filename'] ?>" width="200px" height="150px"/>
				<?php } ?>
			</div>
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
					<li><a href="<?php echo yii::app()->baseUrl.'/admin/updateTrabajo/'.$trabajo->id ?>">Modificar</a></li>
					<li><a href="<?php echo yii::app()->baseUrl.'/admin/deleteTrabajo/'.$trabajo->id ?>">Eliminar</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>