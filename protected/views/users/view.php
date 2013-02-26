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
    array('label' => 'Удалить пользователя', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<h1>View Users #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(
            'name' => 'organization_id',
            'type' => 'raw',
            'value' => "{$model->organization->name} (" . Organizations::getNameByType($model->organization->type) . ')'
        ),
        'username',
        'phio',
        'work_phone',
        'mobile_phone',
        'role',
    ),
)); ?>
