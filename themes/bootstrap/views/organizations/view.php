<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */

$this->breadcrumbs = array(
    'Организации' => array('admin'),
    $model->name,
);

$this->menu = array(
    array('label' => 'Список организаций', 'url' => array('admin')),
    array('label' => 'Создать организацию', 'url' => array('create')),
    array('label' => 'Удалить организацию', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Вы действительно хотите удалить эту организацию?')),
);
?>

<h1>Организация <?php echo $model->name; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(
            'name' => 'type',
            'type' => 'raw',
            'value' => Organizations::getNameByType($model->type),
        ),
        'name',
    ),
)); ?>
