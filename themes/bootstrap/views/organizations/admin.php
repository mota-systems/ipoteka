<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */

$this->breadcrumbs=array(
	'Организации'
);

$this->menu=array(
	array('label'=>'Список организаций', 'url'=>array('index')),
	array('label'=>'Создать организацию', 'url'=>array('create')),
);
?>

<h1>Управление организациями</h1>

<?php $this->widget('application.components.CustomGridView', array(
	'id'=>'organizations-grid',
    'type'             => 'striped bordered condensed',
    'enableHistory'    => TRUE,
    'emptyText'        => 'Результатов нет.',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'enablePagination' => TRUE,
    'enableSorting'    => TRUE,
    'summaryTranslate'=>'организация|организации|организаций',
	'columns'=>array(
		'id',
        array(
            'name' => 'type',
            'type' => 'raw',
            'value' => 'Organizations::getNameByType($data->type)',
            'filter' => array(Organizations::TYPE_AGENT => 'Агент', Organizations::TYPE_BANK => 'Банк'),
        ),
		'name',
		array(
			'class'=>'TbButtonColumn',
		),
	),
)); ?>
