<?php

class CarouselController extends Controller
{

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
                'actions' => array('index', 'view'),
                'users'   => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'admin', 'delete', 'admin', 'delete'),
                'users'   => array(Yii::app()->user->name),
                'roles'   => array(2, 1),
            ),
            array('deny',  // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Carousel;
        if (isset($_POST['Carousel'])) {
            $model->attributes = $_POST['Carousel'];
            $image = CUploadedFile::getInstance($model,'image');
            $model->image = $image;
            if ($model->save()) {
                $image->saveAs(Yii::getPathOfAlias('webroot.images.carousel').DIRECTORY_SEPARATOR.$image);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }
        $this->render('create',array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        if (isset($_POST['Carousel'])) {
            $model->attributes = $_POST['Carousel'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }
        $this->render('update', array(
            'model' => $model,
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
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $criteria = new CDbCriteria();
        $criteria->limit  = 5;
        $model = Carousel::model()->findAll($criteria);
        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Carousel('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Carousel']))
            $model->attributes = $_GET['Carousel'];
        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Carousel the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Carousel::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Carousel $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'carousel-form') {
            echo CActiveForm::validate($model);
        Yii::app()->end();
        }
    }
}
