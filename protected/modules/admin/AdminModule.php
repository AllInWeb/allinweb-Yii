<?php

/**
 * Основной класс админ-модуля
 * Class AdminModule
 */
class AdminModule extends CWebModule
{
    public function actionIndex()
    {
        $this->render('index');
    }
}
