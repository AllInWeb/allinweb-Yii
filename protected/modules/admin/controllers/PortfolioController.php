<?php

class PortfolioController extends Controller
{

    public function actions()
    {
        return array(
            'resized' => array(
                'class'   => 'ext.resizer.ResizerAction',
                'options' => array(
                    'cache_dir'   => Yii::getPathOfAlias('webroot') . '/assets/', // Tmp dir to store cached resized images
                    'base_dir'    => Yii::getPathOfAlias('webroot') . '/',        // Web root dir to search images from
                )
            ),
        );
    }

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
                'actions' => array('index', 'view', 'resized'),
                'users'   => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'admin', 'delete'),
                'users'   => array(Yii::app()->user->name),
                'roles'   => array(2, 1),
            ),
            array('deny',  // deny all users
                'users'   => array('*'),
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


    public function actionCreate()
    {
        $model = new Portfolio;
        if (isset($_POST['Portfolio'])) {
            $model->attributes = $_POST['Portfolio'];
            $image = CUploadedFile::getInstance($model,'image');
            $model->image = $image;
            if ($model->save()) {
                $image->saveAs(Yii::getPathOfAlias('webroot.images.portfolio').DIRECTORY_SEPARATOR.$image);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }
        $this->render('create', array(
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
        if (isset($_POST['Portfolio'])) {
            $model->attributes = $_POST['Portfolio'];
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
        $model = Portfolio::model()->findAll();
        $this->render('index', array('model' => $model));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Portfolio('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Portfolio']))
            $model->attributes = $_GET['Portfolio'];
        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Portfolio the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Portfolio::model()->findByPk($id);
        if($model === null)
            throw new CHttpException(404,'The requested page does not exist.');

        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Portfolio $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'portfolio-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
