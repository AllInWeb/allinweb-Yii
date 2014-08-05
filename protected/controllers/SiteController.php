<?php

class SiteController extends Controller
{
    /**
     * Render главной страницы
     */
    public function actionIndex()
    {
        $carousel = Carousel::model()->findAll(array('limit' => 5));
        $portfolio = Portfolio::model()->findAll();
        $tarif = Tarif::model()->findAll();
        $question =new Question;
        $criteria = new CDbCriteria();
        $criteria->condition = 'answered = 1 AND actual = 1';
        $criteria->limit = 2;
        $questions = Question::model()->findAll($criteria);
        $this->renderPartial('index', array(
            'carousel'  => $carousel,
            'portfolio' => $portfolio,
            'tarif'     => $tarif,
            'questions' => $questions,
            'question'  => $question
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error=Yii::app()->errorHandler->error) {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $model = new LoginForm;
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
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
