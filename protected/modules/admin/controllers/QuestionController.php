<?php

class QuestionController extends Controller
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
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'answers', 'create', 'asq'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('update', 'admin', 'delete'),
                'users' => array(Yii::app()->user->name),
                'roles' => array(2, 1),
            ),
            array('deny', // deny all users
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
        $criteria = new CDbCriteria();
        $criteria->condition = 'answered = 1 AND actual = 1';
        $criteria->limit = 2;
        $questions = Question::model()->findAll($criteria);
        $model = new Question;

        $this->render('create', array(
            'model' => $model,
            'questions' => $questions
        ));
    }

    /**
     * Используеться для создания нового вопроса через Ajax
     */
    public function actionAsq()
    {
        $model = new Question;

        if (isset($_POST['Question'])) {
            $model->attributes = $_POST['Question'];
            if ($model->validate()) {
                if ($model->save(false)) {
                    $question = $model->question;
                    $headers = "From:<{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";
                    $message = "Вы задали вопрос  на сайте компании 'All in Web'.\nТекст вопроса:" . $question . "\nВам ответят в кратчайшие сроки, с уважением команда компании 'All in Web'";
                    mail($model->email, "Вопрос компании 'All in Web'", $message, $headers);
                    echo CJSON::encode(array('code' => 300, 'message' => 'Ваш вопрос успешно задан!'));
                }
            }
            else {
                echo CJSON::encode(array('code' => 400, 'errors' => $model->getErrors()));
            }
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        if (isset($_POST['Question'])) {
            $model->attributes = $_POST['Question'];
            $model->actual = $_POST['Question']['actual'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
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
        $dataProvider = new CActiveDataProvider('Question');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Question('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Question'])) {
            $this->redirect(array('view', 'id' => $model->id));
        }
        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Question the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Question::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Question $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'question-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
