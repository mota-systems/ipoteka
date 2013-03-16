<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */

$this->breadcrumbs=array(
	'Организации'=>array('index'),
	'Добавить организацию',
);

$this->menu=array(
	array('label'=>'Список организаций', 'url'=>array('index')),
);
?>

<h1>Создание организации:</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>