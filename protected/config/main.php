<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Система ипотечных кредитов',
    'language' => 'ru',
    'defaultController' => 'site',
    'theme'=>'bootstrap',
    // preloading 'log' component
    'preload' => array('log'),

    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.components.behaviors.*',
        'application.components.validators.*',
        'bootstrap.widgets.*',
        'bootstrap.widgets.input.*',
    ),

    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '0000',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('178.236.140.18', '::1', '95.134.251.209'),
            'generatorPaths'=>array(
                'bootstrap.gii',
            ),
        ),
        'requests',

    ),

    // application components
    'components' => array(
        'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
        'authManager' => array(
            // Будем использовать свой менеджер авторизации
            'class' => 'PhpAuthManager',
            'defaultRoles' => array('guest'),
        ),
        'user' => array(
            'class' => 'WebUser',
            'loginUrl' => array('/login'),
            // enable cookie-based authentication
            'allowAutoLogin' => TRUE,

        ),
        'cache' => array(
            'class' => 'system.caching.CFileCache',
        ),
        // uncomment the following to enable URLs in path-format

        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => FALSE,
            'caseSensitive' => FALSE,
            'rules' => array(
                '<act:(login|logout)>' => 'site/<act>',
//                '<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/<controller>/<action>',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),


        'db' => array(
            'connectionString' => 'mysql:host=mota-systems.pro;dbname=motasystems_ipoteka',
            'emulatePrepare' => TRUE,
            'username' => 'motasystems_ipot',
            'password' => 'JM2CrKD0',
            'charset' => 'utf8',
            'enableParamLogging' => 0,
            'enableProfiling' => TRUE,
            'schemaCachingDuration' => defined('YII_DEBUG') ? 0 : '3600',
        ),

        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages

                array(
                    'class' => 'CWebLogRoute',
                    'levels' => 'error, warning',
                    'showInFireBug' => TRUE,
                ),
                array(
                    'class' => 'application.extensions.yii-debug-toolbar-master.yii-debug-toolbar.YiiDebugToolbarRoute',
                    'ipFilters' => array('127.0.0.1', '178.236.140.18'),
                ),

            ),
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);