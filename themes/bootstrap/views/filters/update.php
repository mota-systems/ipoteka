<?php
/* @var $this FiltersController */
/* @var $model Filters */

$this->breadcrumbs=array(
	'Фильтры'=>array(Yii::app()->user->isAdmin() ? 'admin': 'index'),
	$model->objectType->type,
);
$this->menu = array(
    array('label'=>'Список фильтров', 'url'=>'/filters'),
    array('label'=>'Добавить фильтр', 'url'=>array('create')),
    array('label'=>'Удалить фильтр', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete', 'id'=>$model->id), 'confirm'=>'Вы действительно хотите удалить этот фильтр?')),

);
?>

<h3>Редактирование фильтра по типу объекта  "<?php echo $model->objectType->type; ?>"</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>