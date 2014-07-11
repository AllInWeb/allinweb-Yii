<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 7/8/14
 * Time: 1:26 PM
 */

//namespace modules\admin;


class AdminModule extends CWebModule {


    public function actionIndex()
    {
        $this->render('index');
    }

} 