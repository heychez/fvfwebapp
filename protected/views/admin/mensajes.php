<?php  ?>

<h1>Mis mensajes</h1>

<table>
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Author</th>
			<th>Fecha</th>
		</tr>
	</thead>
	<tbody>
		<!-- Fila de querys -->
		<tr>
			<form id="msg-form" name="msg-form" method="POST" action="<?php echo yii::app()->baseUrl.'/admin/mensajes/' ?>">
				<td><input onkeypress="enviar(event,this.form)" name="title" type="text" hold=""></td>
				<td><input onkeypress="enviar(event,this.form)" name="name" type="text"></td>
				<td><input name="date" type="radio" value="ASC">ascendente 
					<input name="date" type="radio" value="DESC" checked>descendente</td>
				<input type="submit" style="display:none">
			</form>
		</tr>
	<?php foreach ($mensajes as $key => $msg) {?>
		<tr>
			<td><a href="<?php echo yii::app()->baseUrl.'/admin/mensajes/'.$msg->id ?>"><?php echo $msg->title ?></a></td>
			<td><?php echo $msg->name ?></td>
			<td><?php echo $msg->date ?></td>
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