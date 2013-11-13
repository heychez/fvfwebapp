<?php  ?>

<h1>Mis categorias</h1>

<div>
	<form method="POST" action="<?php echo yii::app()->baseUrl.'/admin/createCategoria/' ?>">
		<b>Crear categoria</b>
		<input name="create[name]" type="text" placeholder="ingrese un nombre">
		<input type="submit" value="crear">
	</form>
	<br>
</div>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		<!-- Fila de querys -->
		<tr>
			<form id="categorias-form" method="POST" action="<?php echo yii::app()->baseUrl.'/admin/categorias/' ?>">
				<td><input onkeypress="enviar(event,this.form)" name="id" type="text" placeholder="id"></td>
				<td><input onkeypress="enviar(event,this.form)" name="name" type="text" placeholder="nombre"></td>
				<input type="submit" style="display:none">
				<td>Cambiar nombre - Eliminar</td>
			</form>
		</tr>
	<?php foreach ($categorias as $key => $val) {?>
		<tr>
			<td><?php echo $val->id ?></td>
			<td><?php echo $val->name ?></td>
			<td>
				<form method="POST" action="<?php echo yii::app()->baseUrl.'/admin/updateCategoria/' ?>">
					<input name="update[name]" type="text" placeholder="nuevo nombre">
					<input name="update[id]" type="hidden" value="<?php echo $val->id ?>">
					<input type="submit" value="guardar">
					<a href="<?php echo yii::app()->baseUrl.'/admin/deleteCategoria/'.$val->id ?>">eliminar</a>
				</form>
			</td>
		</tr>
	<?php } ?>
</tbody>
</table>

<script type="text/javascript">
	function enviar(e, form) {
		tecla=(document.all) ? e.keyCode : e.which;
		if(tecla==13) form.submit();
	}
</script>