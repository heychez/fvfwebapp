<?php //echo date_format(date_create($item->date),'d \d\e M Y - H:i') ?>
<?php 
	$categorias = Categorias::model()->findAll();
	if ($categorias == null) {
		$categorias = array();
	}
 ?>

				<div class="container" id='trabajos' style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/bg3.png);">
                    <div class="row-fluid">
                        <div class="span12" style="padding:20px">
                            <h2 class="page-header">Nuestros Trabajos</h2>
                            <div class="span3">
                                <ul class="nav nav-list well">
								<?php foreach ($categorias as $key => $val) {?>
									<li><a href="<?php echo yii::app()->baseUrl.'/site/trabajos/categoria_id/'.$val->id; ?>"><i class="icon-ok"></i><?php echo $val->name ?></a></li>
								<?php } ?>
                                </ul>
                                <br>
                            </div>
                            <div class="span2"></div>
                            <div class="span4">
                                <img src="<?php echo yii::app()->baseUrl?>/images/slider1.jpg" style="height:200px;width: 300px;margin:0 auto">                                </div>
                        </div>
                    </div>
                </div>

                <div id="contenedor-trabajo-imagenes" >
                    <div class="container">
                    	<ul class="thumbnails">
                        <!-- Siempre Tomar de referencia los primeros 4 para el alineado-->
                    	<?php foreach ($trabajosRecientes as $trabajo) { ?>
                        <?php if (empty($trabajo->imagenes)) continue; $img = $trabajo->imagenes[0];  ?>
                    		<div class="span3">
                                <li>
		                          	<div class="thumbnail" >
		                            	<a href="#<?php echo $trabajo->id ?>" class="thumbnail" data-toggle="modal">
		                                	<img src="<?php echo yii::app()->baseUrl.'/images/'.$img['filename'] ?>" alt="" class="img-rounded" style="width:200px;height: 200px">
	                                 	</a>
		                            </div>
		                        </li>
	                        </div>
						<?php } ?>                                 
                        </ul>
                    </div>
                </div>

        <!-- Modal -->
        <?php foreach ($trabajosRecientes as $trabajo) { ?>
        <div id="<?php echo $trabajo->id ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <h3 id="myModalLabel">FvF Obras</h3>
            </div>
            <div class="modal-body">
                <div class="span12">
                    <?php foreach ($trabajo->imagenes as $img) { ?>
                        <?php echo $img['name'] ?>
                        <img src="<?php echo yii::app()->baseUrl.'/images/'.$img['filename'] ?>" width="200px" height="150px"/>
                    <?php } ?>
                </div>
                <div class="page-header">
                    <h2><?php echo $trabajo->title ?></h2>
                    <b><?php echo $trabajo->categoria ?></b>
                    <em><?php echo date_format(date_create($trabajo->date),'d \d\e M Y - H:i') ?></em>
                </div>
                <p style="text-align: center"> 
                    <?php echo $trabajo->body ?>
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <?php } ?>