<?php 
if (yii::app()->controller->action->id == "index"){
    $url_inicio = "#inicio";
    $url_nosotros = "#nos";
    $url_servicios = "#servicios";
    $url_trabajos = yii::app()->baseUrl.'/site/trabajos';
    $url_contacto = "#contact";
    $classNavbar = "scroll";
} else if (yii::app()->controller->action->id == "trabajos"){
    $url_inicio = yii::app()->homeUrl;
    $url_nosotros = yii::app()->homeUrl.'#nos';
    $url_servicios = yii::app()->homeUrl."#servicios";
    $url_trabajos = yii::app()->baseUrl.'/site/trabajos';
    $url_contacto = yii::app()->homeUrl."#contact";
    $classNavbar = "";
}?>

<!DOCTYPE html>
<html xml:lang="en" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" rel="icon">
        <link href='http://fonts.googleapis.com/css?family=Bentham' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/bg2.png);">
		<div id="inicio" class="container">
			<div class="row">
				<div class="col-md-12">
					<!--barra de menu-->
        			<div class="navbar navbar-colapse navbar-default navbar-fixed-top visible-desktop visible-tablet" id='barmenu'>
                        
                            <div class="container" id="options">
                                <a class="navbar-brand" data-speed="2000" data-easing="easeOutQuart" href="<?php echo $url_inicio ?>" id="icono" ><div class="rotateinfinite"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/LOGO.png" style="width:100px; height:100px"></div></a>
                                <ul class="nav navbar-nav pull-right" id='barmenu'>
                                    <li><a class="<?php echo $classNavbar ?>" data-speed="2000" data-easing="easeOutQuart" href="<?php echo $url_inicio ?>"><b>Inicio</b></a></li>
                                    <li class="divider"></li>
                                    <li><a class="<?php echo $classNavbar ?>" data-speed="2000" data-easing="easeOutQuart" href="<?php echo $url_nosotros ?>"><strong>Nosotros</strong></a></li>
                                    <li class="divider"></li>
                                    <li><a class="<?php echo $classNavbar ?>" data-speed="2000" data-easing="easeOutQuart" href="<?php echo $url_servicios ?>"><strong>Servicios</strong></a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo $url_trabajos ?>"><strong>Nuestros trabajos
                                    </strong></a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li><a class="<?php echo $classNavbar ?>" data-speed="2000" data-easing="easeOutQuart" href="<?php echo $url_contacto ?>"><strong>Contáctanos</strong></a></li>
                                </ul>
                            </div>
                    </div>


                    <!--barra de menu mobiles-->

                    <div class="navbar-wrapper visible-phone">
                        <div class="container">
                            <div class="navbar navbar-inverse navbar-static-top" role="navigation">
                                <div class="container">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>    
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a href="" class="navbar-brand">FvF Obras y diseños</a>
                                    </div>
                                    <div class="navbar-collapse collapse style="height: 1px;"">
                                        <ul class="nav navbar-nav">
                                             <li><a class="<?php echo $classNavbar ?>" data-speed="2000" data-easing="easeOutQuart" href="<?php echo $url_inicio ?>"><b>Inicio</b></a></li>
                                            <li class="divider"></li>
                                            <li><a class="<?php echo $classNavbar ?>" data-speed="2000" data-easing="easeOutQuart" href="<?php echo $url_nosotros ?>"><strong>Nosotros</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a class="<?php echo $classNavbar ?>" data-speed="2000" data-easing="easeOutQuart" href="<?php echo $url_servicios ?>"><strong>Servicios</strong></a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo $url_trabajos ?>"><strong>Nuestros trabajos
                                            </strong></a></li>
                                            <li role="presentation" class="divider"></li>
                                            <li><a class="<?php echo $classNavbar ?>" data-speed="2000" data-easing="easeOutQuart" href="<?php echo $url_contacto ?>"><strong>Contáctanos</strong></a></li>
                                        </ul>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>



 
				</div>
			</div>
		</div>

		<!-- contenido -->
		<?php echo $content; ?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!--FOOTER-->
                    <footer>
                        <div class="container visible-desktop visible-tablet" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4"><strong>Síguenos en:</strong>
                                        <a href="https://www.facebook.com/fvf.obras" style="text-align:center" target="_blank"><i class="icon-facebook-sign icon-4x"></i></a>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4"><strong>Síguenos en:</strong></div>
                                    <div class="col-md-8" style="text-align:center">
                                        <a href="https://www.facebook.com/fvf.obras" style="text-align:left;margin-left:60px" target="_blank"><i class="icon-facebook-sign icon-4x"></i></a>
                                    </div>  
                                </div>
                            </div>
                            <div class="footerm" style="margin-top:10px">
                                <strong>&copy; FvF obras y Diseños. All rights reserved.</strong>
                            </div>
                        </div>
                    </footer>
				</div>
	        </div>
		</div>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/smooth-scroll.js"></script>
</body>
</html>
