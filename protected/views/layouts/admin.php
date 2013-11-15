<?php /* @var $this Controller */ ?>

<!DOCTYPE html>
<html xml:lang="en" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.min.js"></script>

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div class="container" id="page">

		<div id="header">
			<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		</div><!-- header -->

		<div id="mainmenu">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Trabajos', 'url'=>array('/admin/trabajos')),
					array('label'=>'Categorias', 'url'=>array('/admin/categorias')),
					array('label'=>'Mensajes', 'url'=>array('/admin/mensajes')),
					array('label'=>'Opciones', 'url'=>array('/admin/opciones')),
					array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/admin/logout')),
				),
			)); ?>
		</div><!-- mainmenu -->
		
		<div class="container">
			<?php echo $content; ?>
		</div>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</div><!-- footer -->

	</div><!-- page -->
</body>
</html>
