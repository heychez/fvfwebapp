<?php  ?>

<h1>Datos del usuario</h1>

<form name="opciones-form" method="POST" action="<?php echo yii::app()->request->baseUrl?>/admin/opciones">
	Usuario : <input name="username" type="text" value="<?php echo $datos->name ?>"><br>
	Nuevo password : <input name="password" type="password"><br>
	Repite el password : <input name="verif-password" type="password"><br>
	<input name="submit" type="submit" value="Guardar">
</form>