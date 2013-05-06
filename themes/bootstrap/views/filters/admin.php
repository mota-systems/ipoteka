<?php
/* @var $this FiltersController */
/* @var $model Filters */

$this->breadcrumbs = array(
    'Фильтры'
);
$this->menu = array(
    array('label'=>'Добавить фильтр', 'url'=>array('create')),
);
?>

<h1>Список фильтров</h1>
<? $this->widget('bootstrap.widgets.TbAlert', array(
    'block'  => FALSE, // display a larger alert block?
    'fade'   => FALSE, // use transitions?
//        'closeText' => '&times;', // close link text - if set to false, no close link is displayed
    'alerts' => array( // configurations per alert type
        'success' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'error'   => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'warning' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        'info'    => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
    ),
));?>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id'           => 'filters-grid',
    'dataProvider' => $model->search(),
    'template'     => '{items} {pager}',
    'filter'       => $model,
    'columns'      => array(
        array(
            'name'   => 'organization_id',
            'value'  => '$data->organization->name',
            'filter' => Organizations::get_banks(),
        ),
        array(
            'name'   => 'objectTypeId',
            'value'  => '$data->objectType->type',
            'filter' => ObjectType::getAllInArray(),
        ),
        'fee',
//        'interest_rate',
        'min_summ',
        'max_summ',
//        'min_period',
//        'max_period',
        'min_borrower_age',
        'max_borrower_age',

        array(
            'header' => 'Варианты действий',
            'class'  => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
)); ?>
