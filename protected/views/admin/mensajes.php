<?php  ?>
<div class="content">
	<h1>Mis mensajes</h1>

	<table>
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Author</th>
				<th>Fecha</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			<!-- Fila de querys -->
			<tr>
				<form id="msg-form" method="POST" action="<?php echo yii::app()->baseUrl.'/admin/mensajes/' ?>">
					<td><input onkeypress="enviar(event,this.form)" name="title" type="text" placeholder="titulo"></td>
					<td><input onkeypress="enviar(event,this.form)" name="name" type="text" placeholder="author"></td>
					<td><input name="date" type="radio" value="ASC">asc 
						<input name="date" type="radio" value="DESC">desc</td>
					<input type="submit" style="display:none">
					<td>Eliminar</td>
				</form>
			</tr>
		<?php foreach ($mensajes as $key => $msg) {?>
			<tr>
				<td><a href="<?php echo yii::app()->baseUrl.'/admin/mensajes/'.$msg->id ?>"><?php echo $msg->title ?></a></td>
				<td><?php echo $msg->name ?></td>
				<td><?php echo $msg->date ?></td>
				<td><a href="<?php echo yii::app()->baseUrl.'/admin/deleteMensaje/'.$msg->id ?>">eliminar</a></td>
			</tr>
		<?php } ?>
	</tbody>
	</table>
</div>

<script type="text/javascript">
	$("input[value='<?php echo $dateChecked ?>']").attr('checked',true);

	function enviar(e, form) {
		tecla=(document.all) ? e.keyCode : e.which;
		if(tecla==13) form.submit();
	}
</script>