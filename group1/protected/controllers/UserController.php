<?php

class UserController extends Controller
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
			array('allow',  // allow administrator  to perform 'delete' 'update' creat' actions
				'actions'=>array('index','view', 'create', 'update', 'delete','admin'),
				'users'=>array('admin'),
			),
			//array('allow', // allow authenticated user to perform 'view' actions
			//	'actions'=>array('view'),
			//	'users'=>array('@'),
			//),
			
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
			'user'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$user=new User;
                $person=new Person;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($user);

		if(isset($_POST['User'], $_POST['Person']))
		{
                        $person->attributes=$_POST['Person'];
                        if ($person->save()){                       
			$user->attributes=$_POST['User'];
                        $user->person_id = $person->id;
			if($user->save())
                            $this->redirect(array('view','id'=>$user->id));
                        }
                }
		$this->render('create',array(
			'user'=>$user,
                        'person'=>$person,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$user=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($user);

		if(isset($_POST['User']))
		{
			$user->attributes=$_POST['User'];
			if($user->save()){
                        $user->person->attributes=$_POST['Person'];
                        $user->person->save();
                        $this->redirect(array('view','id'=>$user->id));
		}

		$this->render('update',array(
			'user'=>$user,
		));
	}
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	
	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$user=new User('search');
		$user->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$user->attributes=$_GET['User'];

		$this->render('index',array(
			'user'=>$user,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$user=User::model()
                ->with('person')
                ->findByPk((int)$id);
		if($user===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $user;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $user the model to be validated
	 */
	protected function performAjaxValidation($user)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($user);
			Yii::app()->end();
		}
	}
}
