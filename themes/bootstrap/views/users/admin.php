<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs = array(
    'Пользователи' => array('admin'),
    'Список',
);

?>

<?php $this->widget('application.components.CustomGridView', array(
    'id' => 'users-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'type'             => 'striped bordered condensed',

//    'template'=>'{items} {pager}',
    'enableHistory'    => TRUE,
    'summaryTranslate' => 'пользователь|пользователя|пользователей|пользователь',
    'emptyText'        => 'Результатов нет.',
    'columns' => array(

        array(
            'name' => 'organization_id',
            'type' => 'raw',
            'value' => '$data->organization->name',
            'filter' => Yii::app()->user->isAdmin() ? Organizations::get_all_in_array() : FALSE,
        ),
        'username',
        'phio',
        array(
            'name'=>'roleId',
            'value'=>'$data->roles->title',
            'filter'=>Roles::getRolesInArray(),
        ),
        array(
            'class'       => 'bootstrap.widgets.TbButtonColumn',
            'htmlOptions' => array('style' => 'width: 50px'),
            'buttons'     => array(
//                'update' => array(
//                    'visible' => 'Yii::app()->user->checkAccess("editRequest")',
//                ),
                'delete' => array(
                    'visible' => '$data->id!=Yii::app()->user->id'
                ),
            ),
        ),
    ),
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type'=>'primary',
    'label'=>'Добавить пользователя',
    'url'=>'/users/create',
//    'block'=>true
))?>
