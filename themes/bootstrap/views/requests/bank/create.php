<?php
/* @var $this RequestsController */
/* @var $model Requests */

$this->breadcrumbs=array(
	'Заявки'=>array('index'),
	'Новая заявка',
);

$this->menu=array(
	array('label'=>'Список заявок', 'url'=>array('admin')),
);
?>

<h1>Новая заявка</h1>
<?php echo $this->renderPartial('_newForm', array('model'=>$model)); ?>