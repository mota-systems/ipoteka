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
        switch(Yii::app()->user->organizationType){
            case Organizations::TYPE_BANK:
                     $url = 'requests/bank';
                break;
            case Organizations::TYPE_AGENT:
                $url = 'requests/agent';
                break;
            default:
                $url = 'requests/admin';
                break;
        }
        $requestsUrl=Yii::app()->urlManager->createUrl($url);
        $items = array(
            array('label' => 'Заявки', 'url' => $requestsUrl, 'visible' => Yii::app()->user->checkAccess('indexRequest'), 'active' => $this->module ? $this->module->id == 'requests' : FALSE),
            array('label' => 'Пользователи', 'url' => array('/users/index'), 'visible' => Yii::app()->user->checkAccess('adminUser'), 'active' => Yii::app()->controller->id == 'users'),
            array('label' => 'Статистика', 'url' => array('/statistics'), 'visible' => Yii::app()->user->checkAccess('viewGlobalStatistic')),
            array('label' => 'Организации', 'url' => array('/organizations'), 'visible' => Yii::app()->user->checkAccess('adminOrganization'), 'active' => Yii::app()->controller->id == 'organizations'),
            array('label' => 'Войти', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
            array('label' => 'Выйти (' . Yii::app()->user->phio . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
        );
        return $items;

    }

}
