<div class="container" id='contenido'>
	<div class="row-fluid">
		<div class="span12">
				<!--carousel Slide-->
        		<div class="container" id='contenedor-carousel' class="visible desktop visible-tablet">
                    <div class="row">
                        <div class="col-md-12">
                            <div id='myCarousel' class="carousel slide">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <!--Caorusel items-->
                                <div class="carousel-inner">
                                    <div class="active item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner.jpg" alt="banner1" style="width: 1170px;height: 500px;"></div>
                                    <div class="item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider2.png" alt="banner2" style="width: 940px;height: 500px;"></div>
                                    <div class="item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider3.jpg" alt="banner3" style="width: 940px;height: 500px;"></div>
                                    <div class="item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fvf_bannergrande.png" alt="banner4" style="width: 1170px;height: 500px;"></div>
                                </div>
                                <!--Carousel nav-->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left " style="font-size: 30px"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" style="font-size: 30px"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id='nos'>
                    <br>
                    <br>
                </div>

                <!--Nosotros-->
                <div class="container" id="contenedor-nosotros" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/bg9.png);">
                    <div class="row">
                        <div class="col-md-12" style="padding:20px">
                            <div class="page-header">                                    
                                <h2>Nosotros</h2>
                            </div>
                            <div class="col-md-5">
                                <h3>Historia</h3>
                                <p> xdipsum dolor sit amet, consectetur adipisicing elit. 
                                    Cupiditate nam dolor soluta possimus eos velit excepturi quaerat      
                                    obcaecati et id! Reiciendis, doloribus minus dolorem temporibus 
                                    ratione assumenda doloremque omnis voluptate? 
                                </p>
                            </div>
                            <div class="col-md-5">
                                <h3>Misión</h3>
                                <p>
                                    La empresa "FVF OBRAS Y DISEÑOS" con 20 años de experiencia en el rubro de carpintería, ofrece los servicios de: fabricación en general, restauración, mantenimiento a residencias y a todo tipo de empresas y constructoras; con acabados de primera calidad a pedido de nuestros clientes, fabricamos puertas principales en todo los diseños, puertas contra-placadas para interiores, ventanas , mamparas, techos de terraza sol y sombra  techado con policarbonato , muebles de baño ,  centro  de entretenimiento para la sala , dormitorios en general ,  comedores ,   muebles en general ,  pasos de madera , armarios , closet  en melamine, en MDF enchapado en cedro  , portones seccionales  , la empresa FvF le ofrece ,  seriedad ,  puntualidad ,  garantía y experiencia en nuestros trabajos.
                                </p>
                                <h3>Visión</h3>
                                <p>
                                    Ser la Empresa líder del mercado en el mercado de la carpintería; trabajar con los más ambicios proyectos
                                    de las grandes, medianas y pequeñas empresas; brindar un servicio con seriedad, puntualidad y calidad en nuestros trabajos como lo hemos venido logrando a lo largo de nuestros años de experiencia.
                                </p>
                            </div>
                        </div>
                    </div>
                    <label id='servicios'></label>
                </div>
                    
                <!--Servicios-->
                <div class="container" id ='contenedor-serv' style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/bg8.png);">
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="page-header">
                                <h2 id='servicios'>Servicios</h2>
                            </div>
                            <div class="col-md-5">
                                <h3>Mano de obra</h3>
                                <p>
                                    FVF Obras y Diseños toma el reto de diseñar y fabricar sus mas 
                                    ambiciosos proyectos, ofreciendo trabajos en: Melamine,Drywall  
                                    y en todo tipo de madera; ofrece ademas acabados finos a sus 
                                    trabajos. <br>
                                    <div>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img1.jpg" class="img-responsive" alt="Responsive image">
                                    </div>
                                </p>
                            </div>
                            <div class="col-md-5">
                                <h3>Mantenimiento</h3>
                                <p>
                                    No hay material con el que no podamos trabajar, ni restauración 
                                    que no podamos lograr, FVF OBRAS Y DISEÑOS ofrece sus servicios
                                    también a la reconstruccion y/o mantenimiento de toda la 
                                    carpintería de su casa, negocio o lo que usted necesite.
                                    <br>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img1.jpg" class="img-responsive" alt="Responsive image">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!--Contactanos-->
                <div class="container visible-desktop visible-tablet" id='textpr' style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/bg7.png);">
                    <div class="row">
                        <div class="col-md-12">                                    
                            <hgroup>
                                <div class="page-header">
                                    <h2 id="contact">Contáctanos</h2>
                                </div>
                            </hgroup>
                            <div class="col-md-3">
                                <form method="POST" action="<?php echo yii::app()->baseUrl.'/site/contacto' ?>" role="form">
                                    <div class="form-group">
                                    	<label for='nombre'><strong>Nombre:</strong></label>  
                                        <input name="contact-form[name]" class="form-control" type='text' id='nombre' placeholder='Escribe tu nombre' required style="margin-left:30px">
                                        <br>
                                        <label for='correo'><strong>E-mail:</strong></label> 
                                        <input name="contact-form[email]" class="form-control" type='email' id='correo'  placeholder='Escribe tu e-mail' required style="margin-left:30px">
                                        <br>
                                        <label for='asunto'><strong>Asunto:</strong></label> 
                                        <input name="contact-form[title]" class="form-control" type='text' id='asunto' placeholder='Escribe el asunto' required style="margin-left:30px">
                                        <br>
                                        <label for='Mensaje'><strong>Mensaje</strong></label> 
                                        <textarea class="form-control" name="contact-form[body]" rows="5" placeholder="Comentario" style="margin-left:30px">
                                        </textarea>
                                        <input type='submit' value='Enviar Mensaje' id='btnsubmit' style="margin-left:80px">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5" id='mapa'>
                                <p><i class="icon-map-marker"></i> <b>Ubicanos:</b></p>
                                <iframe src="https://mapsengine.google.com/map/embed?mid=zEMJJ2kPRNVc.kNvoE_AUPfrU"></iframe>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <p><span class="glyphicon glyphicon-earphone"></span><b>Teléfono:</b> 2575420</p>
                                <p><span class="glyphicon glyphicon-phone"></span> <b>RPM:</b> 994438777</p>
                                <p><span class="glyphicon glyphicon-phone"></span> <b>Claro:</b> 994438777</p>
                                <p><span class="glyphicon glyphicon-phone"></span> <b>Movistar:</b> 961679677</p>
                                <br>
                                <p><i class="icon-envelope"></i><b>Correo:</b> fvf.valverde@hotmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Contactanos mobile-->
                <div class="container visible-phone" id='textpr' style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/bg7.png);">
                    <div class="row">
                        <div class="col-md-12">                                    
                            <hgroup>
                                <div class="page-header">
                                    <h2 id="contact">Contáctanos</h2>
                                </div>
                            </hgroup>
                            <div class="col-md-3">
                                <form method="POST" action="<?php echo yii::app()->baseUrl.'/site/contacto' ?>" role="form">
                                    <div class="form-group">
                                        <label for='nombre'><strong>Nombre:</strong></label>  
                                        <input name="contact-form[name]" class="form-control" type='text' id='nombre' placeholder='Escribe tu nombre' required style="margin-left:30px">
                                        <br>
                                        <label for='correo'><strong>E-mail:</strong></label> 
                                        <input name="contact-form[email]" class="form-control" type='email' id='correo'  placeholder='Escribe tu e-mail' required style="margin-left:30px">
                                        <br>
                                        <label for='asunto'><strong>Asunto:</strong></label> 
                                        <input name="contact-form[title]" class="form-control" type='text' id='asunto' placeholder='Escribe el asunto' required style="margin-left:30px">
                                        <br>
                                        <label for='Mensaje'><strong>Mensaje</strong></label> 
                                        <textarea class="form-control" name="contact-form[body]" rows="5" placeholder="Comentario" style="margin-left:30px">
                                        </textarea>
                                        <input type='submit' value='Enviar Mensaje' id='btnsubmit' style="margin-left:80px">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6" id='mapa'>
                                <p><i class="icon-map-marker"></i> Ubicanos:</p>
                                <iframe src="https://mapsengine.google.com/map/embed?mid=zEMJJ2kPRNVc.kNvoE_AUPfrU"></iframe>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <p><span class="glyphicon glyphicon-earphone"></span><b>Teléfono:</b> 2575420</p>
                                <p><span class="glyphicon glyphicon-phone"></span> <b>RPM:</b> 994438777</p>
                                <p><span class="glyphicon glyphicon-phone"></span> <b>Claro:</b> 994438777</p>
                                <p><span class="glyphicon glyphicon-phone"></span> <b>Movistar:</b> 961679677</p>
                                <br>
                                <p><i class="icon-envelope"></i><b>Correo:</b> fvf.valverde@hotmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
	</div>
</div>

