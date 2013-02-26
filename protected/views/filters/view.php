<?php
/* @var $this FiltersController */
/* @var $model Filters */

$this->breadcrumbs=array(
	'Filters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Filters', 'url'=>array('index')),
	array('label'=>'Create Filters', 'url'=>array('create')),
	array('label'=>'Update Filters', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Filters', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Filters', 'url'=>array('admin')),
);
?>

<h1>View Filters #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'fee',
		'interest_rate',
		'min_period',
		'max_period',
		'min_borrower_age',
		'max_borrower_age',
	),
)); ?>
