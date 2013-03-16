<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs = array(
    'Пользователи' => array('index'),
    $model->phio,
);

$this->menu = array(
    array('label' => 'Список пользователей', 'url' => array('index')),
    array('label' => 'Создать пользователя', 'url' => array('create')),
    array('label' => 'Редактировать пользователя', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Удалить пользователя', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Вы действительно хоитет удалить этого пользователя?')),
);
?>

<h1><?php echo $model->phio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//        array(
//            'name' => 'organization_id',
//            'type' => 'raw',
//            'value' => "{$model->organization->name} (" . Organizations::getNameByType($model->organization->type) . ')'
//        ),
        'username',
        'work_phone',
        'mobile_phone',
        'roles.title',
    ),
)); ?>
