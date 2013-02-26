<?php
/* @var $this RequestsController */
/* @var $model Requests */

$this->breadcrumbs=array(
	'Requests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Requests', 'url'=>array('index')),
	array('label'=>'Manage Requests', 'url'=>array('admin')),
);
?>

<h1>Новая заявка</h1>
 <? $view = $model->scenario == 'firstCreate' ? '_newForm' : '_form'; ?>
<?php echo $this->renderPartial($view, array('model'=>$model)); ?>