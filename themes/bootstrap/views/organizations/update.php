<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */

$this->breadcrumbs=array(
	'Организации'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Список организаций', 'url'=>array('admin')),
	array('label'=>'Создать организацию', 'url'=>array('create')),
);
?>

<h1>Редактирование организации <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>