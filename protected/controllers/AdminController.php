<?php 

class AdminController extends Controller
{
	public $defaultAction = 'login';
	public $layout = 'admin';
	public $title = 'Administrador';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to access 'index' and 'view' actions.
				'actions'=>array('login'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated users to access all actions
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			)
		);
	}

	/*public function actionIndex()
	{
		$this->render('index', array('title' => $this->title));
	}*/

	public function actionImagenes()
	{
		$imagenes = Images::model()->findAll(array('order'=>'filename DESC'));
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

		$this->render('imagenes', array('imagenes' => $imagenes));
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

		$imagenes = Images::model()->findAll(array('order'=>'filename'));
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

		$this->render('trabajos', array('trabajos' => $trabajos, 'imagenes' => $imagenes));
	}

	public function updateTrabajo(){

	}

	public function deleteTrabajo($id){

	}

	public function actionCategorias(){
		$id = "";
		$name="";

		if (isset($_POST['id'])) {
			$id = $_POST['id'];
		}
		if (isset($_POST['name'])) {
			$name = $_POST['name'];
		}

		$criteria = new CDbCriteria();
		$criteria->compare('id',$id,true);
		$criteria->compare('name',$name,true);

		$categorias = Categorias::model()->findAll($criteria);

		$this->render('categorias', array('categorias'=>$categorias));
	}

	public function actionCreateCategoria(){
		if (isset($_POST['create'])) {
			$categoria = new Categorias();
			$categoria->attributes = $_POST['create'];

			$categoria->insert();
		}
		$this->redirect(yii::app()->baseUrl.'/admin/categorias');
	}

	public function actionUpdateCategoria(){
		if (isset($_POST['update'])) {
			$id = $_POST['update']['id'];
			$name = $_POST['update']['name'];
			if ($name != null) {
				Categorias::model()->updateByPk($id, array('name'=>$name));
			}
		}
		$this->redirect(yii::app()->baseUrl.'/admin/categorias');
	}

	public function actionDeleteCategoria($id){
		if ($id != null) {
			Categorias::model()->deleteByPk($id);
		}
		$this->redirect(yii::app()->baseUrl.'/admin/categorias');
	}

	public function actionMensajes($id = null)
	{
		if ($id != null) {
			$mensaje = Mensajes::model()->findByPk($id);
			$this->render('view_mensaje', array('mensaje'=>$mensaje));
		}else{
			$title="";
			$name="";
			$date="DESC";

			if (isset($_POST['title'])) {
				$title = $_POST['title'];
			}
			if (isset($_POST['name'])) {
				$name = $_POST['name'];
			}
			if (isset($_POST['date'])) {
				$date = $_POST['date'];
			}

			$criteria = new CDbCriteria();
			$criteria->compare('title',$title,true);
			$criteria->compare('name',$name,true);
			$criteria->order = 'date '.$date;

			$mensajes = Mensajes::model()->findAll($criteria);
			$this->render('mensajes',array('mensajes'=>$mensajes));
		}
	}

	public function actionDeleteMensaje($id){
		if ($id != null) {
			Mensajes::model()->deleteByPk($id);
		}
		$this->redirect(yii::app()->baseUrl.'/admin/mensajes');
	}

	public function actionOpciones()
	{
		$datos = yii::app()->user;

		if (isset($_POST['username'])){
			$user = Users::model()->findByPk($datos->name);
			$user->username = $_POST['username'];
			$user->password = $_POST['password'];
			$user->update();
		}

		$this->render('opciones',array('datos' => $datos));
	}

	public function actionLogin()
	{
		if (strcmp(yii::app()->user->name, "Guest")!=0) {
			$this->redirect(Yii::app()->baseUrl.'/admin/trabajos');
		}

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
				$this->redirect(Yii::app()->baseUrl.'/admin/trabajos');
		}

		$this->render('login', 
			array(
				'model' => $model,
				'title' => $this->title
				));
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->baseUrl.'/site');
	}

	public function actionSubirImagen()
	{
		$type = $_FILES['imagen']['type'];

		if (strpos($type, 'image') === false) {
			echo $type." formato de imagen no valido";
			return;
		}

		$type = stristr($type, '/');
		$type[0] = '.';

		$filename = date("Y-m-d-H-i-s").$type;

		$pathTmp = $_FILES['imagen']['tmp_name'];
		$path = yii::app()->basePath.'\\..\\images\\'.$filename;

		move_uploaded_file($pathTmp,$path);

		$image = new Images();
		$image->name = $_POST['name'];;
		$image->filename = $filename;
		$image->type = $_FILES['imagen']['type'];
		$image->date = date("Y-m-d H:i:s");
		
		if ($image->insert()) {
			$this->redirect(yii::app()->request->baseUrl.'/admin/imagenes');	
		}else{
			echo "No se pudo subir la imagen";
		}
	}

	public function actionSubirTrabajo()
	{
		$trabajo = new Trabajos();
		$trabajo->title = $_POST['title'];
		$trabajo->body = $_POST['body'];
		$trabajo->date = date("Y-m-d H:i:s");

		if ($trabajo->insert()) {
			if (isset($_POST['gp-imgs'])) {
				$imgIds = $_POST['gp-imgs'];

				for ($i=0; $i < count($imgIds); $i++) {
					$image = Images::model()->find("id=".$imgIds[$i]);

					$img = new Images();
					$img->name = $image->name;
					$img->filename = $image->filename;
					$img->type = $image->type;
					$img->trabajo_id = $trabajo->id;

					if (!$img->insert()) {
						echo "No se pudo subir las imagenes";
						return;
					}
				}
				
			}
			$this->redirect(yii::app()->request->baseUrl.'/admin/trabajos');
		}else{
			echo "No se pudo subir el trabajo";
		}	
	}

	private function nombreMes($mes)
	{
			if ($mes == "01") return "Enero";
		else 	if ($mes == "02") return "Febrero";
		else 	if ($mes == "03") return "Marzo";
		else 	if ($mes == "04") return "Abril";
		else 	if ($mes == "05") return "Mayo";
		else 	if ($mes == "06") return "Junio";
		else 	if ($mes == "07") return "Julio";
		else 	if ($mes == "08") return "Agosto";
		else 	if ($mes == "09") return "Setiembre";
		else 	if ($mes == "10") return "Octubre";
		else 	if ($mes == "11") return "Noviembre";
		else 	if ($mes == "12") return "Diciembre";
		return "";
	}
}
?>
