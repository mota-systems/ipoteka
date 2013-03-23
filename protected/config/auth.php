<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mota-systems
 * Date: 02.02.13
 * Time: 17:10
 * To change this template use File | Settings | File Templates.
 */

return array(
    'guest'                       => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'Гость',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'agentManager'                => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'Менеджер Агента',
        'children'    => array(
            'guest', 'viewOwnRequest', 'uploadFileComment','viewAllComments', 'createRequest', 'sendComment', 'uploadDocument', 'indexComment'
        ),
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'agentAdmin'                  => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'Управляющий агента',
        'children'    => array(
            'agentManager', 'viewOwnOrganizationRequest', 'viewStatistic', 'adminOwnUser', // позволим модератору всё, что позволено пользователю
        ),
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'bankManager'                 => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'Менеджер банка',
        'children'    => array(
            'guest', 'indexRequest', 'viewRequest', 'considerDocument', 'considerRequest', 'viewOwnOrganizationComments', 'makeDeal', 'sendComment' // позволим админу всё, что позволено модератору
        ),
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'bankAdmin'                   => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'Управляющий банка',
        'children'    => array(
            'overrideConsiderRequest', 'bankManager', 'viewStatistic', 'adminOwnUser', 'adminUser', 'editFilter' // позволим админу всё, что позволено модератору
        ),
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'admin'                       => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'Администратор системы',
        'children'    => array(
            'adminUser', 'indexAllRequests', 'viewAllComments', 'editRequest', 'bankAdmin', 'agentAdmin', 'deleteRequest', 'viewRequest', 'adminOrganization', 'viewGlobalStatistic' // позволим админу всё, что позволено модератору
        ),
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'createRequest'               => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Создать заявку',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'editRequest'                 => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Редактировать заявку',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'indexRequest'                => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр списка заявок',
        'bizRule'     => NULL,
        'data'        => NULL
    ),

    'indexAllRequests'            => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр всего списка заявок',
        'bizRule'     => NULL,
        'data'        => NULL
    ),

    'viewRequest'                 => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'Просмотр заявки',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'considerRequest'             => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Отказать\одобрить заявку',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'overrideConsiderRequest'     => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Отказать\одобрить заявку',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'deleteRequest'               => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'Administrator',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'editFilter'                  => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Редактировать фильтры',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'viewStatistic'               => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр статистики',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'viewGlobalStatistic'         => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр глобальной статистики',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'considerDocument'            => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Одобрить\вернуть документ',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'uploadDocument'              => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Загрузить документ',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'sendComment'                 => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Оставить комментарий заявок',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'uploadFileComment'                 => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Оставить комментарий заявок',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'makeDeal'                    => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Совершить сделку',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'adminUser'                   => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Управление пользователями',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'adminOrganization'           => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Управление организацияйми',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'viewOwnOrganizationRequest'  => array(
        'type'        => CAuthItem::TYPE_TASK,
        'description' => 'Просмотр заявки своей организации',
        'bizRule'     => 'return Yii::app()->user->organization_id==$params["request"]->author->organization_id;',
        'children'    => array(
            'viewOwnRequest'
        ),
        'data'        => NULL
    ),
    'viewOwnRequest'              => array(
        'type'        => CAuthItem::TYPE_TASK,
        'description' => 'Просмотр своей заявки',
        'bizRule'     => 'return Yii::app()->user->id==$params["author"]',
        'children'    => array(
            'viewRequest'
        ),
        'data'        => NULL
    ),
    'adminOwnUser'                => array(
        'type'        => CAuthItem::TYPE_TASK,
        'description' => 'Управление пользователями своей организации',
        'bizRule'     => 'return Yii::app()->user->organization_id==$params["user"]->organization_id;',
        'children'    => array(
            'adminUser',
        ),
        'data'        => NULL
    ),
    'viewAllComments'             => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр всех комментариев',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    'viewOwnOrganizationComments' => array(
        'type'        => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр комментариев своей организации',
        'bizRule'     => NULL,
        'data'        => NULL
    ),
    /*    'indexOwnRequest' => array(
            'type' => CAuthItem::TYPE_TASK,
            'type' => CAuthItem::TYPE_TASK,
            'description' => 'Просмотр списка своих заявок',
            'bizRule' => 'return Yii::app()->user->id==$params["request"]->authID;',
            'data' => NULL
        ),
        'indexOwnOrganizationRequest' => array(
            'type' => CAuthItem::TYPE_TASK,
            'description' => 'Просмотр списка заявок своей организации',
            'bizRule' => 'return Yii::app()->user->id==$params["post"]->authID;',
            'data' => NULL
        ),*/
    /*    'viewOwnDialog' => array(
            'type' => CAuthItem::TYPE_TASK,
            'description' => 'Просмотр своего диалога',
            'bizRule' => 'return Yii::app()->user->id==$params["post"]->authID;',
            'data' => NULL
        ),*/
);
