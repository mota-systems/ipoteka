<?php
/* @var $this FiltersController */
/* @var $model Filters */

$this->breadcrumbs = array(
    'Фильтры' => array(Yii::app()->user->isAdmin() ? 'admin' : 'index'),
    'Новый фильтр',
);
$this->menu = array(
    array('label'=>'Список фильтров', 'url'=>'/filters'),
);
?>

    <h1>Новый фильтр</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>