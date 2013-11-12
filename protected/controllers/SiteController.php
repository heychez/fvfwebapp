<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$imagenes = Images::model()->findAll(array(
				'order'=>'filename DESC',
				));

		$first = true;
		$filename  = "";

		foreach ($imagenes as $key => $img) {
			if ($first or strcmp($filename, $img->filename)!=0) {
				$filename = $img->filename;
				$first = false;
			}else{
				unset($imagenes[$key]);
			}
		}

		array_slice($imagenes, 5);

		$this->render('index', array('imagenes'=>$imagenes));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


	public function actionTrabajos()
	{
		$trabajos = Trabajos::model()->findAll(array('order'=>'date DESC'));

		foreach ($trabajos as $item) {
			$imagenes = Images::model()->findAll(
				array(
					'condition'=> 'trabajo_id='.$item->id
				));
			$item->imagenes = $imagenes;
		}		

		$this->render('trabajos', array('trabajos' => $trabajos));
	}

	/**
	 * Displays the contact page
	 */
	public function actionContacto()
	{
		if (isset($_POST['contact-form'])){
			$mensaje = new Mensajes;

			$mensaje->attributes = $_POST['contact-form'];
			$mensaje->date = date("Y-m-d H:i:s");

			$mensaje->insert();
		}

		$this->redirect(Yii::app()->homeUrl);
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

}