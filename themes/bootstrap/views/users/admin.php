<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs = array(
    'Пользователи' => array('admin'),
    'Список',
);

$this->menu = array(
    array('label' => 'Добавить пользователя', 'url' => array('create')),
);

?>
<? $this->widget('bootstrap.widgets.TbAlert', array(
    'block'  => FALSE, // display a larger alert block?
    'fade'   => FALSE, // use transitions?
//        'closeText' => '&times;', // close link text - if set to false, no close link is displayed
    'alerts' => array( // configurations per alert type
        'success' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'error'   => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'warning' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'info'    => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
    ),
));?>
<?php $this->widget('application.components.CustomGridView', array(
    'id'               => 'users-grid',
    'dataProvider'     => $model->search(),
    'filter'           => $model,
    'type'             => 'striped bordered condensed',

//    'template'=>'{items} {pager}',
    'enableHistory'    => TRUE,
    'summaryTranslate' => 'пользователь|пользователя|пользователей|пользователь',
    'emptyText'        => 'Результатов нет.',
    'columns'          => array(

        array(
            'name'   => 'organization_id',
            'type'   => 'raw',
            'value'  => '$data->organization->name',
            'filter' => Yii::app()->user->isAdmin() ? Organizations::get_all_in_array() : FALSE,
        ),
        'username',
        'phio',
        array(
            'name'   => 'roleId',
            'value'  => '$data->roles->title',
            'filter' => function () {
                switch (Yii::app()->user->organizationType) {
                    case Organizations::TYPE_ADMIN:
                        return Roles::getRolesInArray();
                        break;
                    case Organizations::TYPE_AGENT:
                        return array(Roles::ROLE_AGENT_MANAGER => 'Менеджер', Roles::ROLE_AGENT_ADMIN => 'Администратор');
                        break;
                    case Organizations::TYPE_BANK:
                        return array(Roles::ROLE_BANK_MANAGER => 'Менеджер', Roles::ROLE_BANK_ADMIN => 'Администратор');
                        break;
                    default:
                        return FALSE;
                        break;
                }
            },
        ),
        array(
            'class'       => 'bootstrap.widgets.TbButtonColumn',
            'htmlOptions' => array('style' => 'width: 50px'),
            'buttons'     => array(
                'delete' => array(
                    'visible' => '$data->id!=Yii::app()->user->id'
                ),
            ),
        ),
    ),
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type'  => 'primary',
    'label' => 'Добавить пользователя',
    'url'   => '/users/create',
//    'block'=>true
))?>
