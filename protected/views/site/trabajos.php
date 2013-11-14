<?php ?>

<div class="content">
	<h1>Trabajos realizados</h1>

	<?php foreach ($trabajosRecientes as $item) { ?>
		<p>
			<b><?php echo $item->title; ?></b> <em><?php echo date_format(date_create($item->date),'d \d\e M Y - H:i') ?></em> <br>
			<?php echo $item->body; ?><br>
			<?php foreach ($item->imagenes as $img) { ?>
				<?php echo $img['name'] ?><br>
				<img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$img['filename']; ?>" width="400px" height="250px" ><br>
			<?php } ?>
		</p>
	<?php } ?>
</div>