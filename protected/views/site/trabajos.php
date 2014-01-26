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
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="<?php echo $trabajo->id ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><?php echo $trabajo->categoria ?></h4>
                    </div>
                    <div class="modal-body">
                        <div id="carousel-<?php echo $trabajo->id ?>" class="carousel slide">
                            <ol class="carousel-indicators">
                            <?php $i=0; ?>
                            <?php foreach ($trabajo->imagenes as $img) { ?>
                                <?php if ($i==0) $class = "active";
                                    else $class=""; ?>
                                    <li data-target="#carousel-<?php echo $trabajo->id ?>" data-slide-to="<?php echo $i ?>" class="<?php echo $class; ?>"></li>
                            <?php $i++; } ?>
                            </ol>

                            <div class="carousel-inner">
                            <?php $i=0; ?>
                            <?php foreach ($trabajo->imagenes as $img) { ?>
                                <?php if ($i==0) $class = "item active";
                                    else $class="item"; ?>
                                <div class="<?php echo $class; ?>">
                                    <img src="<?php echo yii::app()->baseUrl.'/images/'.$img['filename'] ?>" alt="<?php echo $img['name'] ?>" />
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                            <?php $i++; } ?>
                            </div>

                            <a class="carousel-control left" href="#carousel-<?php echo $trabajo->id ?>" data-slide="prev">
                            <!--<span class="icon-prev"></span>--><
                            </a>
                            <a class="carousel-control right" href="#carousel-<?php echo $trabajo->id ?>" data-slide="next">
                            <!--<span class="icon-next"></span>-->>
                            </a>
                        </div>
                        <div>
                            <h1><?php echo $trabajo->title ?></h1>
                            <em><?php echo date_format(date_create($trabajo->date),'d \d\e M Y - H:i') ?></em><br>
                            <p><?php echo $trabajo->body ?></p>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>