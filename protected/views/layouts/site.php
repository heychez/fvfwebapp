<!DOCTYPE html>
<html xml:lang="en" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" rel="icon">
        <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
		<script src="http://code.jquery.com/jquery-2.0.3.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/bg2.png);">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<!--barra de menu-->
        			<div class="navbar navbar-inverse navbar-fixed-top visible-desktop visible-tablet mainmenu" id='barra'>
                        <div class="navbar-inner">
                            <div class="container">
                                <a href="<?php echo yii::app()->homeUrl ?>#" class="brand" id="icono"><div class="rotateinfinite"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_sinfondo.png" style="width:75px; height:35px"></div></a>
                                <a href="<?php echo yii::app()->homeUrl ?>#" class="brand" id="icono2"><strong>Obras y diseños</strong></a>
                                <ul class="nav nav pull-right" id="barmenu">
                                    <li><a href="<?php echo yii::app()->homeUrl ?>#"><b>Inicio</b></a></li>
                                    <li class="divider-vertical"></li>
                                    <li><a href="<?php echo yii::app()->homeUrl ?>#nos"><strong>Nosotros</strong></a></li>
                                    <li class="divider-vertical"></li>
                                    <li><a href="<?php echo yii::app()->homeUrl ?>#servicios"><strong>Servicios</strong></a></li>
                                    <li class="divider-vertical"></li>
                                    <li><a href="<?php echo yii::app()->baseUrl.'/site/trabajos' ?>"><strong>Nuestros trabajos
                                    </strong></a></li>
                                    <li class="divider-vertical"></li>
                                    <li><a href="<?php echo yii::app()->homeUrl ?>#contact"><strong>Contáctanos</strong></a></li>
                                </ul>
                            </div>  
                        </div>
                    </div>

                    <!--barra de menu mobiles-->
                    <div class="navbar  navbar-inverse navbar-fixed-top visible-phone mainmenu" id='barra'>
                        <div class="navbar-inner">
                            <div class="container">
                                <ul class="nav nav pull-left">
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-reorder"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo yii::app()->homeUrl ?>#">Inicio</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo yii::app()->homeUrl ?>#nos">Nosotros</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo yii::app()->homeUrl ?>#servicios">Servicios</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo yii::app()->baseUrl.'/site/trabajos' ?>">Nuestros trabajos</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo yii::app()->homeUrl ?>#contact">Contáctanos</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <p class="navbar-text text-center"><strong>FVF Obras Y Diseños</strong></p>
                            </div>  
                        </div>
                    </div>
				</div>
			</div>
		</div>

		<!-- contenido -->
		<?php echo $content; ?>

		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<!--FOOTER-->
                    <footer>
                        <div class="container visible-desktop visible-tablet" >
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="span2" ></div>
                                    <div class="span2" ></div>
                                    <div class="span2" ></div>
                                    <div class="span2" ></div>
                                    <div class="span2" style="text-align:right"><strong>Siguenos en:</strong></div>
                                    <div class="span2">
                                        <a href="https://www.facebook.com/fvf.obras" style="text-align:left" target="_blank"><i class="icon-facebook-sign icon-4x"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="footer">
                                <strong>Copyright &copy; <?php echo date('Y'); ?> FvF obras y Diseños. All rights reserved.</strong>
                            </div>
                        </div>
                    </footer>

                    <!--FOOTER mobiles-->
                    <footer>
                        <div class="container visible-phone">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="span6"><strong>Siguenos en:</strong></div>
                                    <div class="span6">
                                        <a href="https://www.facebook.com/fvf.obras" style="text-align:left;margin-left:60px" target="_blank"><i class="icon-facebook-sign icon-4x"></i></a>
                                    </div>  
                                </div>
                            </div>
                            <div class="footer" style="margin-top:10px">
                                <strong>&copy; FvF obras y Diseños. All rights reserved.</strong>
                            </div>
                        </div>
                    </footer>
				</div>
	        </div>
		</div>

</body>
</html>
