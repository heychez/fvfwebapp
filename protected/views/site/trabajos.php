<?php //echo date_format(date_create($item->date),'d \d\e M Y - H:i') ?>
<?php 
	$categorias = Categorias::model()->findAll();
	if ($categorias == null) {
		$categorias = array();
	}
 ?>
		<!--
		<?php foreach ($trabajosRecientes as $trabajo) { ?>
			<div class="post">
				<div class="title"><?php echo $trabajo->title ?></div>
				<div class="author">Categoria: <?php echo $trabajo->categoria ?></div>
				<em><?php echo date_format(date_create($trabajo->date),'d \d\e M Y - H:i') ?></em><br>
				<div class="nav"><?php echo $trabajo->body ?></div>
				<div class="images">
				<?php foreach ($trabajo->imagenes as $img) { ?>
					<?php echo $img['name'] ?>
					<img src="<?php echo yii::app()->baseUrl.'/images/'.$img['filename'] ?>" width="200px" height="150px"/>
				<?php } ?>
				</div>
			</div>
		<?php } ?>
		-->

					<div class="container" id='trabajos' style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/bg3.png);">
                        <div class="row-fluid">
                            <div class="span12" style="padding:20px">
                                <h2 class="page-header">Nuestros Trabajos</h2>
                                <div class="span3">
                                    <ul class="nav nav-list well">
                                        <!--<li class="nav-header">MUEBLES</li>
                                        <li><a href=""><i class="icon-ok"></i>Muebles Comedor</a></li>
                                        <li><a href=""><i class="icon-ok"></i>Muebles de Cocina</a></li>
                                        <li><a href=""><i class="icon-ok"></i>Muebles de Dormitorio</a></li>
                                        <li><a href=""><i class="icon-ok"></i>Muebles de Baño</a></li>
                                        <li class="nav-header">OTROS</li>
                                        <li><a href=""><i class="icon-ok"></i>Puertas</a></li>
                                        <li><a href=""><i class="icon-ok"></i>Miscelaneo</a></li>-->
										<?php foreach ($categorias as $key => $val) {?>
											<li><a href="<?php echo yii::app()->baseUrl.'/site/trabajos/categoria_id/'.$val->id; ?>"><i class="icon-ok"></i><?php echo $val->name ?></a></li>
										<?php } ?>
                                    </ul>
                                    <br>
                                </div>
                                <div class="span2"></div>
                                <div class="span4">
                                    <img src="<?php echo yii::app()->baseUrl?>/images/slider1.jpg" style="height:200px;width: 300px;margin:0 auto">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="contenedor-trabajo-imagenes" >
                        <div class="container">
                        	<ul class="thumbnails">
                            	<!-- Siempre Tomar de referencia los primeros 4 para el alineado-->
                            	<?php foreach ($trabajosRecientes as $trabajo) { ?>
                            	<?php $img = $trabajo->imagenes[0]; if ($img == null) continue; ?>
                            		<div class="span3">
		                                <li id = "img/slider1.jpg">
		                                	<div class="thumbnail" >
		                                        <div class="span12">
		                                    	   <a href="#myModal" class="thumbnail" data-toggle="modal">
		                                        	   <img src="<?php echo yii::app()->baseUrl.'/images/'.$img['filename'] ?>" alt="" class="img-rounded" style="width:200px;height: 200px">
		                                    	   </a>
		                                        </div>
		                                	</div>
		                            	</li>
	                                </div>
								<?php } ?>                                 
                        	</ul>
                        </div>
                   	</div>
        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <h3 id="myModalLabel">FvF Obras</h3>
            </div>
            <div class="modal-body">
                <div class="span12">
                <img src="img/slider1.jpg">
                </div>
                <div class="page-header">
                    <h2>Dormitorio de 3 a 1</h2>
                </div>
                <p style="text-align: center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, consequuntur ipsa vel sed autem sint obcaecati doloremque earum a quisquam animi ducimus quam nulla? Sapiente reprehenderit pariatur odio quis soluta. </p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>