<?php 

class AdminController extends Controller
{
	public $defaultAction = 'login';
	public $layout = 'admin';
	public $title = 'Administrador';

	public function filters(){
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	public function accessRules(){
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
	
	public function actions(){
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

	public function actionTrabajos($id = null){
		if ($id != null) {
			$trabajo = Trabajos::model()->findByPk($id);

			$imagenes = Imagenes::model()->findAll(
				array(
					'condition'=> 'trabajo_id='.$trabajo->id
				));
			$trabajo->imagenes = $imagenes;

			$categorias = Categorias::model()->findAll();
			$categoria = Categorias::model()->findByPk($trabajo->categoria_id);

			$this->render('view_trabajo', array(
				'trabajo'=>$trabajo, 
				'imagenes'=>$imagenes, 
				'categorias'=>$categorias,
				'idCategoria'=>$categoria->id
				));
		}else{
			$title="";
			$date="DESC";

			if (isset($_POST['title'])) {
				$title = $_POST['title'];
			}
			if (isset($_POST['date'])) {
				$date = $_POST['date'];
			}

			$criteria = new CDbCriteria();
			$criteria->compare('title',$title,true);
			$criteria->order = 'date '.$date;

			$trabajos = Trabajos::model()->findAll($criteria);
			$categorias = Categorias::model()->findAll();

			$this->render('trabajos', array('trabajos' => $trabajos, 'categorias' => $categorias, 'dateChecked' => $date));
		}
	}


	public function actionCreateTrabajo(){
		if (isset($_POST['trabajo']) and isset($_POST['categoria'])) {
			$trabajo = new Trabajos();
			$trabajo->attributes = $_POST['trabajo'];
			$trabajo->categoria_id = $_POST['categoria'];
			$trabajo->date = date("Y-m-d H:i:s");

			if ($trabajo->insert()) {
				if (isset($_POST['name'])) {
					$imgNames = $_POST['name'];

					$imgFileNames = array();
				    foreach( $_FILES['file'] as $key => $all ){
				        foreach( $all as $i => $val ){
				            $imgFileNames[$i][$key] = $val;    
				        }    
				    }

					for ($i=0; $i < count($imgFileNames); $i++) { 
						$type = $imgFileNames[$i]['type'];

						if (strpos($type, 'image') === false) {
							echo $type." formato de imagen no valido";
							return;
						}	

						$type = stristr($type, '/');
						$type[0] = '.';

						$filename = date("Y-m-d-H-i-s")."-".$i.$type;

						$pathTmp = $imgFileNames[$i]['tmp_name'];
						$path = yii::app()->basePath.'\\..\\images\\'.$filename;

						move_uploaded_file($pathTmp,$path);

						$image = new Imagenes();
						$image->name = $imgNames[$i];;
						$image->filename = $filename;
						$image->type = $imgFileNames[$i]['type'];
						$image->trabajo_id = $trabajo->id;
						$image->date = date("Y-m-d H:i:s");

						$image->insert();
					}
				}
			}else{
				echo "No se pudo subir el trabajo";
			}
		}
		$this->redirect(yii::app()->baseUrl.'/admin/trabajos');
	}

	public function actionUpdateTrabajo(){
		if (isset($_POST['update'])) {
			$trabajo = Trabajos::model()->findByPk($_POST['id']);
			$trabajo->attributes = $_POST['update'];
			$trabajo->categoria_id = $_POST['categoria'];
			$trabajo->date = date("Y-m-d H:i:s");

			if ($trabajo->update()) {
				if (isset($_POST['name'])) {
					$imgNames = $_POST['name'];

					$imgFileNames = array();
				    foreach( $_FILES['file'] as $key => $all ){
				        foreach( $all as $i => $val ){
				            $imgFileNames[$i][$key] = $val;    
				        }    
				    }

					for ($i=0; $i < count($imgFileNames); $i++) { 
						$type = $imgFileNames[$i]['type'];

						if (strpos($type, 'image') === false) {
							echo $type." formato de imagen no valido";
							return;
						}	

						$type = stristr($type, '/');
						$type[0] = '.';

						$filename = date("Y-m-d-H-i-s")."-".$i.$type;

						$pathTmp = $imgFileNames[$i]['tmp_name'];
						$path = yii::app()->basePath.'\\..\\images\\'.$filename;

						move_uploaded_file($pathTmp,$path);

						$image = new Imagenes();
						$image->name = $imgNames[$i];;
						$image->filename = $filename;
						$image->type = $imgFileNames[$i]['type'];
						$image->trabajo_id = $trabajo->id;
						$image->date = date("Y-m-d H:i:s");

						$image->insert();
					}
				}
				if (isset($_POST['idImgs'])) {
					for ($i=0; $i < count($_POST['idImgs']); $i++) { 
						$id = $_POST['idImgs'][$i];
						$imagen = Imagenes::model()->findByPk($id);

						Imagenes::model()->deleteByPk($id);

						unlink(yii::app()->basePath.'\\..\\images\\'.$imagen->filename);
					}
				}
			}else{
				echo "No se pudo subir el trabajo";
			}
		}
		$this->redirect(yii::app()->baseUrl.'/admin/trabajos');
	}

	public function actionDeleteTrabajo($id){
		if ($id != null) {
			$imagenes = Imagenes::model()->findAll('trabajo_id='.$id);

			foreach ($imagenes as $key => $img) {
				unlink(yii::app()->basePath.'\\..\\images\\'.$img->filename);
			}
			
			Imagenes::model()->deleteAll('trabajo_id='.$id);
			Trabajos::model()->deleteByPk($id);
		}
		$this->redirect(yii::app()->baseUrl.'/admin/trabajos');
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
			$this->render('mensajes', array('mensajes'=>$mensajes, 'dateChecked'=>$date));
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
