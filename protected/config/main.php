<?php
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'All in Web',
    'sourceLanguage' => 'en_US',
    'language' => 'ru',

    'preload' => array('log'),

    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '1111',
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
        'admin' => array(
           'class' => 'application.modules.admin.AdminModule'
        ),
    ),

    'components' => array(
        'authManager' => array(
            // Будем использовать свой менеджер авторизации
            'class' => 'PhpAuthManager',
            // Роль по умолчанию. Все, кто не админы, модераторы и юзеры — гости.
            'defaultRoles' => array('guest'),
        ),
        'user' => array(
            'class' => 'WebUser',
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),

        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '<controller:\w+>/<id:\d+>'              => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>'          => '<controller>/<action>',
            ),
            'showScriptName' => false,
        ),

        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=yiiallinweb',
            'emulatePrepare'   => true,
            'username'         => 'root',
            'password'         => 'root',
            'charset'          => 'utf8',
            'tablePrefix'      => 'tbl_'
        ),

        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
    ),
    'params' => array(
        'adminEmail' => 'viktor.novikov95@gmail.com',
        'carouselImageUrl' => '/images/carousel/',
        'portfolioImageUrl' => '/images/portfolio/',
    ),
);
