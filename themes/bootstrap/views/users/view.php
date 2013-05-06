<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs = array(
    'Пользователи' => array('admin'),
    $model->phio,
);

$this->menu = array(
    array('label' => 'Список пользователей', 'url' => array('admin')),
    array('label' => 'Добавить пользователя', 'url' => array('create')),
    array('label' => 'Редактировать пользователя', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Удалить пользователя', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Вы действительно хоитет удалить этого пользователя?')),
);
?>

<h1><?php echo $model->phio; ?></h1>
<? $attributes = array(
    'username',
    'work_phone',
    'mobile_phone',
    'roles.title',
);
if (Yii::app()->user->isAdmin()) {
    $org = array(
        'name'  => 'organization_id',
        'type'  => 'raw',
        'value' => "{$model->organization->name} (" . Organizations::getNameByType($model->organization->type) . ')'
    );
    array_unshift($attributes, $org);
}?>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'       => $model,
    'attributes' => $attributes
)); ?>
