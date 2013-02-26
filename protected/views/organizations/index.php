<?php
/* @var $this OrganizationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Организации',
);

$this->menu=array(
	array('label'=>'Create Organizations', 'url'=>array('create')),
	array('label'=>'Manage Organizations', 'url'=>array('admin')),
);
?>

<h1>Организации</h1>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>
<?php $this->widget('application.components.CustomGridView', array(
    'id'=>'organizations-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'summaryTranslate'=>'организация|организации|организаций',
    'columns'=>array(
        'id',
        'type',
        'name',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
