<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Пользователи'=>array('admin'),
	$model->phio=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Добавить пользователя', 'url'=>array('create')),
	array('label'=>'Просмотр карточки пользователя', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Список пользователей', 'url'=>array('admin')),
);
?>

<h3>Редактирование пользователя <?php echo $model->phio; ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>