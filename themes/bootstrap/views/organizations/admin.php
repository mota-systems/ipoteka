<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */

$this->breadcrumbs = array(
    'Организации'
);

$this->menu = array(
    array('label' => 'Создать организацию', 'url' => array('create')),
);
?>

<h1>Управление организациями</h1>

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
    'id'               => 'organizations-grid',
    'type'             => 'striped bordered condensed',
    'enableHistory'    => TRUE,
    'emptyText'        => 'Результатов нет.',
    'dataProvider'     => $model->search(),
    'filter'           => $model,
    'enablePagination' => TRUE,
    'enableSorting'    => TRUE,
    'summaryTranslate' => 'организация|организации|организаций',
    'columns'          => array(
        array(
            'name'   => 'type',
            'type'   => 'raw',
            'value'  => 'Organizations::getNameByType($data->type)',
            'filter' => array(Organizations::TYPE_ADMIN => 'Администрация', Organizations::TYPE_AGENT => 'Агент', Organizations::TYPE_BANK => 'Банк'),
        ),
        'name',
//        'author.phio',
        array(
            'name'   => 'date_created',
            'type'   => 'russianDate',
            'filter' => FALSE,
        ),
        array(
            'class'   => 'TbButtonColumn',
            'buttons' => array(
                'delete' => array(
                    'visible' => 'Yii::app()->user->organization_id!=$data->id'
                ),
            ),
        ),
    ),
)); ?>
