<?php

class SiteController extends Controller
{
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        $criteria = new CDbCriteria();
        $criteria->condition = "answered = 0";
        $count = count(Question::model()->findAll($criteria));
        $this->render('index',array('count' => $count));
    }
}
