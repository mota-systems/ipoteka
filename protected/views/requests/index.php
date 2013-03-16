<?php
$this->breadcrumbs=array(
	'Requests',
);

$this->menu=array(
	array('label'=>'Create Requests','url'=>array('create')),
	array('label'=>'Manage Requests','url'=>array('admin')),
);
?>

<h1>Requests</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
