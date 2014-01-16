<?php

class PolicyController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Policy;
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		
		if(isset($_POST['Policy']))
		{
			//Teka, kausap ko boss ko
			//Okay. :) Nga pala yung sa destination, kasi ililipat yan sa server. paano yun change lang?
			// Yeahp
			// okay :)
			
		
			$attachment = array();
		
			if(!empty($_FILES)){
			
				// setup the attachment ariable from the file constant
				$attachment['name'] = $_FILES['Policy']['name']['attachment'];
				$attachment['type'] = $_FILES['Policy']['type']['attachment'];
				$attachment['tmp'] = $_FILES['Policy']['tmp_name']['attachment'];
				$attachment['error'] = $_FILES['Policy']['error']['attachment'];
				$attachment['size'] = $_FILES['Policy']['size']['attachment'];
				
				// get the current time so that there will be no overlap on the file names
				// looks like there's an issue with strtotime with windows machines
				$now = date('YmdGis');
				
				// split the file name to nitpick the extension
				$temp = explode('.', $attachment['name']);
				
				//assuming that all files to be uploaded are standard files, get the final extension
				$extension = end($temp);
				
				// concatinate the date and the extension
				$filename = "{$now}.{$extension}";
				
				// set the file destination
				// It must be the webroot of the project. Change it to your liking
				// If the server is linux though, please run:
				//    `chmod og+w` to the uplaods folder. Without the ``
				// in this case `chmod og+w C:\xampp\htdocs\Cambay\uploads`
				$destination = "uploads\\{$filename}";
				
				// insert the file name to be saved into the database
				$_POST['Policy']['attachment'] = $filename;
				
				// move the temporarily uploaded file in the server to the destination
				// throw an error if the move failed
				// usual cases : wrong permissions and or the folder does not exist
				//  Not sure if the error throwing is right so, pakiayos na lang
				if(!move_uploaded_file($attachment['tmp'],$destination )){
					error('Something went wrong');
				}
				
				
				//echo '<pre>' . print_r($attachment, true) . '</pre>';
				//echo '<pre>' . print_r($destination, true) . '</pre>';
				//echo '<pre>' . print_r($now, true) . '</pre>';
				//echo '<pre>' . print_r(date('Y-m-d G:i:s a'), true) . '</pre>';
				
				//exit;
			}
		
			$model->attributes=$_POST['Policy'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Policy']))
		{
			$model->attributes=$_POST['Policy'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Policy');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Policy('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Policy']))
			$model->attributes=$_GET['Policy'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Policy the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Policy::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Policy $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='policy-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
