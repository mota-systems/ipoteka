<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
Yii::setPathOfAlias('requests', dirname(__FILE__) . '/../modules/requests');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath'          => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name'              => 'СИК 1.0',
    'language'          => 'ru',
    'defaultController' => 'site',
    'theme'             => 'bootstrap',
    // preloading 'log' component
    'preload'           => array('log'),

    // autoloading model and component classes
    'import'            => array(
        'application.models.*',
        'application.components.*',
        'application.components.behaviors.*',
        'application.components.validators.*',
        'application.components.widgets.*',
        'application.components.helpers.*',
        'bootstrap.widgets.*',
        'bootstrap.widgets.input.*',
    ),

    'modules'           => array(
        // uncomment the following to enable the Gii tool

        'gii'      => array(
            'class'          => 'system.gii.GiiModule',
            'password'       => '0000',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'      => array('176.117.143.48', '::1', '95.134.251.209'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
        'requests' => array(
            'class'   => 'requests.RequestsModule',
            'modules' => array(
                'documents',
            )
        ),
        'yiiQuickSwap',
    ),

    // application components
    'components'        => array(
        'yiiQuickSwap' => array(
            'class' => 'yiiQuickSwap.components.yiiQuickSwap',
            'users' => array('unicredit', 'broker', 'admin'), // a list of users that you want to swap between
            'redirect' => 'requests', // where to redirect to after the swap
        ),
        'image'        => array(
            'class'  => 'ext.image.CImageComponent',
            // GD or ImageMagick
            'driver' => 'GD',
            // ImageMagick setup path
            'params' => array('directory' => '/opt/local/bin'),
        ),
        'bootstrap'    => array(
            'class'         => 'bootstrap.components.Bootstrap',
            'responsiveCss' => TRUE,
        ),
        'format'       => array(
            'class' => 'application.components.CCFormatter',
        ),
        'authManager'  => array(
            // Будем использовать свой менеджер авторизации
            'class'        => 'PhpAuthManager',
            'defaultRoles' => array('guest'),
        ),
        'user'         => array(
            'class'          => 'WebUser',
            'loginUrl'       => array('/login'),
            // enable cookie-based authentication
            'allowAutoLogin' => TRUE,

        ),
        'cache'        => array(
            'class' => 'system.caching.CFileCache',
        ),
        /*'pager'        => array(
            'header'         => '',
            'cssFile'        => FALSE,
            'firstPageLabel' => '<<',
            'lastPageLabel'  => '>>',
            'prevPageLabel'  => '<',
            'nextPageLabel'  => '>',
        ),*/
        // uncomment the following to enable URLs in path-format

        'urlManager'   => array(
            'urlFormat'      => 'path',
            'showScriptName' => FALSE,
            'caseSensitive'  => FALSE,
            'rules'          => array(
                '<act:(login|logout)>'                   => 'site/<act>',
//                '<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/<controller>/<action>',
                '<controller:\w+>/<id:\d+>'              => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>'          => '<controller>/<action>',
//                'requests/default/consider/<status:(approve|refuse)>/<id:\d+>' => 'requests/default/consider',
            ),
        ),


        'db'           => array(
            'connectionString'      => 'mysql:host=mota-systems.pro;dbname=motasystems_ipoteka',
            'emulatePrepare'        => TRUE,
            'username'              => 'motasystems_ipot',
            'password'              => 'JM2CrKD0',
            'charset'               => 'utf8',
            'enableParamLogging'    => 0,
            'enableProfiling'       => defined('YII_DEBUG') ? TRUE : FALSE,
            'schemaCachingDuration' => /*defined('YII_DEBUG') ? 0 : */
            '3600',
        ),
        /*array(
            'connectionString'      => 'mysql:host=localhost;dbname=ipoteka',
            'emulatePrepare'        => TRUE,
            'username'              => 'root',
            'password'              => '',
            'charset'               => 'utf8',
            'enableParamLogging'    => 0,
            'enableProfiling'       => TRUE,
            'schemaCachingDuration' => defined('YII_DEBUG') ? 0 : '3600',
        ),*/

        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log'          => array(
            'class'  => 'CLogRouter',
            'routes' => array(
                array(
                    'class'  => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages

                array(
                    'class'         => 'CWebLogRoute',
                    'levels'        => 'error, warning',
                    'showInFireBug' => TRUE,
                ),
                array(
                    'class'     => 'application.extensions.yii-debug-toolbar-master.yii-debug-toolbar.YiiDebugToolbarRoute',
                    'ipFilters' => array('127.0.0.1', '176.117.143.48'),
                ),

            ),
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'            => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);