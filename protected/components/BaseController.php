<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mota-systems
 * Date: 08.02.13
 * Time: 1:53
 * To change this template use File | Settings | File Templates.
 */
class BaseController extends Controller
{
    public function getMenuItems()
    {
        $items = array(
            array('label'=>'Заявки', 'url'=>array('/requests'), 'visible'=>Yii::app()->user->checkAccess('indexRequest')),
            array('label'=>'Пользователи', 'url'=>array('/users'), 'visible'=>Yii::app()->user->checkAccess('adminUser')),
            array('label' => 'Статистика', 'url' => array('/statistics'), 'visible' => Yii::app()->user->checkAccess('viewGlobalStatistic')),
            array('label' => 'Организации', 'url' => array('/organizations'), 'visible' => Yii::app()->user->checkAccess('adminOrganization')),
            array('label'=>'Войти', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Выйти ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
        );
        return $items;

    }

}
