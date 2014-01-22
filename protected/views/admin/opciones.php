<?php  ?>
<div class="content">
	<h1>Datos del usuario</h1>

	<form name="opciones-form" method="POST" action="<?php echo yii::app()->request->baseUrl?>/admin/opciones">
		Usuario&nbsp;&nbsp;: <input name="username" type="text" value="<?php echo $datos->name ?>" style="width:223px;"><br>
		Nuevo password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="password" type="password" style="width:160px;"><br>
		Repite el password : <input name="verif-password" type="password" style="width:160px;"><br>
		<input name="submit" type="submit" value="Guardar">
	</form>
</div>