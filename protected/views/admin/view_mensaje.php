<?php  ?>
<div class="span-18">
	<div class="content">
		<div class="post">
			<div class="title"><?php echo $mensaje->title ?></div>
			<div class="author"><?php echo $mensaje->name ?> / <?php echo $mensaje->email ?></div>
			<em><?php echo $mensaje->date ?></em><br>
			<div class="nav"><?php echo $mensaje->body ?></div>
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
					<li><a href="<?php echo yii::app()->baseUrl.'/admin/deleteMensaje' ?>">Eliminar</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>