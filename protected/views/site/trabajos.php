<?php //echo date_format(date_create($item->date),'d \d\e M Y - H:i') ?>

<div class="content">
	<h1>Trabajos recientes</h1>
	<div class="list-view">
		<div class="items">
		<?php foreach ($trabajosRecientes as $trabajo) { ?>
			<div class="post">
				<div class="title"><?php echo $trabajo->title ?></div>
				<div class="author">Categoria: <?php echo $trabajo->categoria ?></div>
				<em><?php echo date_format(date_create($trabajo->date),'d \d\e M Y - H:i') ?></em><br>
				<div class="nav"><?php echo $trabajo->body ?></div>
				<div class="images">
				<?php foreach ($trabajo->imagenes as $img) { ?>
					<?php echo $img['name'] ?>
					<img src="<?php echo yii::app()->baseUrl.'/images/'.$img['filename'] ?>" width="200px" height="150px"/>
				<?php } ?>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>