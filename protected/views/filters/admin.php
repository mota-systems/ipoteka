<?php
$this->breadcrumbs=array(
	'Filters'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Filters','url'=>array('index')),
	array('label'=>'Create Filters','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('filters-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Filters</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'filters-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'organization_id',
		'objectTypeId',
		'fee',
		'interest_rate',
		'min_summ',
		/*
		'max_summ',
		'min_period',
		'max_period',
		'min_borrower_age',
		'max_borrower_age',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
