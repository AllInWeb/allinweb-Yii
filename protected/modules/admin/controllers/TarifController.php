<?php

class TarifController extends Controller
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
                'actions'=> array('index', 'view'),
                'users'  => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=> array('create', 'update', 'admin', 'delete', 'addcolumn', 'dropcolumn'),
                'users'  => array(Yii::app()->user->name),
                'roles'  => array(2, 1),
            ),
            array('deny',  // deny all users
                'users'  => array('*'),
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

    public function actionAddcolumn()
    {
        $columns = Tarif::model()->getAttributes();
        if (isset($_POST['column']) && isset($_POST['type'])) {
            $alias = new Aliases();
            $alias->column = $_POST['column'];
            $alias->alias = $_POST['alias'];
            $alias->save();
            $command = Yii::app()->db->createCommand();
           if ($command->addColumn('tbl_tarif', $_POST['column'], $_POST['type'])) {
               $this->redirect(array('/admin/site/index'));
           };
        }
        $this->render('addcolumn', array('columns'=>$columns));
    }

    public function actionDropcolumn($column)
    {
       $command = Yii::app()->db->createCommand;
       if ($command->dropColumn('tbl_tarif', $column)) {
           $this->redirect(array('/admin/tarif/addcolumn'));
       }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model=new Tarif;
        if (isset($_POST['Tarif'])) {
            $model->attributes = $_POST['Tarif'];
            if($model->save())
            $this->redirect(array('view', 'id' => $model->id));
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
        if (isset($_POST['Tarif'])) {
            $model->attributes = $_POST['Tarif'];
            if($model->save())
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
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $model = Tarif::model()->findAll();
        $this->render('index',array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Tarif('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Tarif']))
            $model->attributes = $_GET['Tarif'];
        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Tarif the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Tarif::model()->findByPk($id);
        if($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Tarif $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tarif-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
