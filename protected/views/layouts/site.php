<?php 
	$categorias = Categorias::model()->findAll();
	if ($categorias == null) {
		$categorias = array();
	}
 ?>

<!DOCTYPE html>
<html xml:lang="en" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

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
			<ul>
				<li><a href="<?php echo yii::app()->homeUrl ?>#">Inicio</a></li>
				<li><a href="<?php echo yii::app()->homeUrl ?>#nosotros">Nosotros</a></li>
				<li>
					<a href="<?php echo yii::app()->baseUrl.'/site/trabajos' ?>">Trabajos : </a>
					<?php foreach ($categorias as $key => $val) { ?>
					<span>
						<a href="<?php echo yii::app()->baseUrl.'/site/trabajos/categoria_id/'.$val->id ?>">
							<?php echo $val->name ?>
						</a>
					</span>	
					<?php } ?>
				</li>
				<li><a href="<?php echo yii::app()->homeUrl ?>#contacto">Contacto</a></li>
			</ul>
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

	<script type="text/javascript">


		$("#mainmenu a").click(function (){
			$("#mainmenu li").removeClass('active');
			$(this).parent().addClass('active');
		});
	</script>
</body>
</html>
