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
    public $pageTitle = 'СИК 1.0';
    public $menuTitle, $documentsModel;

    public function getMenuItems()
    {
        switch (Yii::app()->user->organizationType) {
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
        $requestsUrl = Yii::app()->urlManager->createUrl($url);
        $items = array(
            array('label' => 'Заявки', 'url' => $requestsUrl, 'active' => $this->module ? ($this->module->id == 'requests' AND Yii::app()->controller->action->id != 'statistics') : FALSE),
            array('label' => 'Пользователи', 'url' => array('/users'), 'visible' => Yii::app()->user->checkAccess('adminUser'), 'active' => Yii::app()->controller->id == 'users'),
            array('label' => 'Статистика', 'url' => array('/requests/' . Yii::app()->getModule('requests')->defaultController . '/statistics'), 'visible' => Yii::app()->user->checkAccess('viewStatistic'), 'active' => $this->module ? ($this->module->id == 'requests' AND Yii::app()->controller->action->id == 'statistics') : FALSE),
            array('label' => 'Организации', 'url' => array('/organizations'), 'visible' => Yii::app()->user->checkAccess('adminOrganization'), 'active' => Yii::app()->controller->id == 'organizations'),
            array('label' => 'Фильтры', 'url' => array('/filters'), 'visible' => Yii::app()->user->checkAccess('editFilter'), 'active' => Yii::app()->controller->id == 'filters'),
            array('label' => 'Войти', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
            array('label' => 'Выйти', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
        );
        return $items;

    }

    public function disableProfilers()
    {
        if (Yii::app()->getComponent('log')) {
            foreach (Yii::app()->getComponent('log')->routes as $route) {
                if (in_array(get_class($route), array('CProfileLogRoute', 'CWebLogRoute', 'YiiDebugToolbarRoute', 'DbProfileLogRoute'))) {
                    $route->enabled = FALSE;
                }
            }
        }
    }

}
