<?php
$this->breadcrumbs=array(
	'Requests'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Requests','url'=>array('index')),
	array('label'=>'Create Requests','url'=>array('create')),
	array('label'=>'View Requests','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Requests','url'=>array('admin')),
);
?>

<h1>Update Requests <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>