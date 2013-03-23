<?php
/* @var $this RequestsController */
/* @var $model Requests */

/*$this->breadcrumbs=array(
	'Заявки'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Добавить клиента',
);*/

/*$this->menu=array(
	array('label'=>'List Requests', 'url'=>array('index')),
	array('label'=>'Create Requests', 'url'=>array('create')),
	array('label'=>'View Requests', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Requests', 'url'=>array('admin')),
);
*/?>

<h2><?=$model->fullname?></h2>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'       => $model,
    'attributes' => array(
        'summ',
        'initialFee',
        'type.type',
        'age',
    ),
))?>

<?php echo $this->renderPartial('/general/update/page'.$page, array('model'=>$model)); ?>