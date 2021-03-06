<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */

$this->breadcrumbs=array(
	'Организации'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Список организаций', 'url'=>array('index')),
	array('label'=>'Создать организацию', 'url'=>array('create')),
	array('label'=>'Просмотр карточки '. $model->name, 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Редактирование организации <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>