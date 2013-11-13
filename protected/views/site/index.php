<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section id="slider">
	<h1>Slider</h1>
	<p>
		<?php foreach ($imagenes as $key => $img) { ?>
			<img src="<?php echo yii::app()->baseUrl.'/images/'.$img->filename ?>" width="200" height="100">
		<?php } ?>
	</p>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
</section>

<section id="nosotros">
	<h1>Nosotros</h1>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
</section>

<section id="contacto">
	<h1>Contacto</h1>
	<form method="POST" action="<?php echo yii::app()->baseUrl.'/site/contacto' ?>">
		Nombre: <input name="contact-form[name]" type="text"><br>
		Email: <input name="contact-form[email]" type="email"><br>
		Asunto: <input name="contact-form[title]" type="text"><br>
		Mensaje <br>
		<textarea name="contact-form[body]">
		</textarea><br>
		<input type="submit">
	</form>
</section>