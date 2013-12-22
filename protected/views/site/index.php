<div class="container">
	<div class="row-fluid">
		<div class="span12">
				<!--carousel Slide-->
        		<div class="container" id="contenedor-carousel">
                    <div class="row-fluid">
                        <div class="span12">
                            <div id="myCarousel" class="carousel slide">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <!--Caorusel items-->
                                <div class="carousel-inner">
                                    <div class="active item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider1.jpg" alt="banner1" style="width: 1170px;height: 500px;"></div>
                                    <div class="item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider2.png" alt="banner2" style="width: 940px;height: 500px;"></div>
                                    <div class="item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider3.jpg" alt="banner3" style="width: 940px;height: 500px;"></div>
                                    <div class="item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fvf_bannergrande.png" alt="banner4" style="width: 1170px;height: 500px;"></div>
                                </div>
                                <!--Carousel nav-->
                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="nos">
                    <br>
                    <br>
                </div>

                <!--Nosotros-->
                <div class="container" id="contenedor-nosotros" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/bg9.png);">
                    <div class="row-fluid">
                        <div class="span12" style="padding:20px">
                            <div class="page-header">                                    
                                <h2>Nosotros</h2>
                            </div>
                            <div class="span5">
                                <h3>Historia</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    Cupiditate nam dolor soluta possimus eos velit excepturi quaerat      
                                    obcaecati et id! Reiciendis, doloribus minus dolorem temporibus 
                                    ratione assumenda doloremque omnis voluptate? 
                                </p>
                            </div>
                            <div class="span5">
                                <h3>Mision</h3>
                                <p>
                                    La empresa "FVF OBRAS Y DISEÑOS" con 20 años de experiencia en el rubro de carpinteria, ofrece los servicios de: fabricación en general, restauración y mantenimiento a residencias y a todo tipo empresas y constructoras; con acabados de primera a pedido de nuestros clientes, fabricamos puertas principales en todo los diseños, puertas contra-placadas para interiores, ventanas,mamparas ,   techos  de terraza sol y sombra  techado con policarbonato , muebles de baño ,  centro  de entretenimiento para la sala , dormitorios en general ,  comedores ,   muebles en general ,  pasos de madera , armarios , closet  en melanina, en MDF enchapado en cedro  , portones seccionales  , la empresa fvf le ofrece ,  seriedad ,  puntualidad ,  garantía y experiencia en nuestros trabajos.
                                </p>
                                <h3>Vision</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    Eius, beatae, molestias voluptates veniam aut enim alias 
                                    eligendi sit corporis facere voluptas assumenda expedita fuga.
                                     Consequatur, in nostrum laborum illum esse?
                                </p>
                            </div>
                        </div>
                    </div>
                    <label id="servicios"></label>
                </div>
                    
                <!--Servicios-->
                <div class="container" id ="contenedor-serv" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/bg8.png);">
                    <div class="row-fluid">
                        <div class="span12" style="padding:20px">
                            <div class="page-header">
                                <h2 id="servicios">Servicios</h2>
                            </div>
                            <div class="span5">
                                <h3>Mano de obra</h3>
                                <p>
                                    FVF Obras y Diseños toma el reto de diseñar y fabricar sus mas 
                                    ambiciosos proyectos, ofreciendo trabajos en: Melamine,Drywall  
                                    y en todo tipo de madera; ofrece ademas acabados finos a sus 
                                    trabajos. <br>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img1.jpg" class="img-circle">
                                </p>
                            </div>
                            <div class="span5">
                                <h3>Mantenimiento</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, 
                                    illo quisquam laboriosam consequatur numquam nihil labore blanditiis 
                                    libero voluptatum ea mollitia laborum esse in sed temporibus modi 
                                    repellendus commodi fuga?
                                    <br>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img1.jpg" class="img-circle">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!--Contactanos-->
                <div class="container" id='textpr' style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/footer.png);">
                    <div class="row-fluid">
                        <div class="span12" style="padding:20px">                                    
                            <hgroup>
                                <div class="page-header">
                                    <h2 id="contact">Contáctanos</h2>
                                </div>
                            </hgroup>
                            <div class="span5">
                                <form method="POST" action="<?php echo yii::app()->baseUrl.'/site/contacto' ?>">
                                    	<label for='nombre'><strong>Nombre:</strong></label>
                                        <input name="contact-form[name]" type='text' id='nombre' placeholder='Escribe tu nombre' required style="margin-left:30px">
                                        <label for='correo'><strong>E-mail:</strong></label>
                                        <input name="contact-form[email]" type='email' id='correo'  placeholder='Escribe tu e-mail' required style="margin-left:30px">
                                        <label for='asunto'><strong>Asunto:</strong></label>
                                        <input name="contact-form[title]" type='text' id='asunto' placeholder='Escribe el asunto' required style="margin-left:30px">
                                        <label for='Mensaje'><strong>Mensaje</strong></label>
                                        <textarea class="form-control" name="contact-form[body]" rows="5" placeholder="Comentario" style="margin-left:30px">
                                        </textarea>
                                        <input type='submit' value='Enviar Mensaje' id='btnsubmit' style="margin-left:30px">
                                </form>
                            </div>
                            <div class="span6" id='mapa'>
                                <label id='ubicanos'>
                                    <strong>Ubicanos en:</strong>
                                    </label>
                                <iframe src="https://mapsengine.google.com/map/embed?mid=zEMJJ2kPRNVc.kNvoE_AUPfrU"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
	</div>
</div>