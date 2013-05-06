<?php
/* @var $this FiltersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Фильтры',
);
$this->menu = array(
    array('label' => 'Добавить фильтр', 'url' => array('create')),
);
?>

<h3>Список фильтров</h3>
<div class='filters'>

    <?
    $this->widget('bootstrap.widgets.TbAlert', array(
        'block' => FALSE, // display a larger alert block?
        'fade' => FALSE, // use transitions?
//        'closeText' => '&times;', // close link text - if set to false, no close link is displayed
        'alerts' => array(// configurations per alert type
            'success' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
            'error' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
            'warning' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
            'info' => array('fade' => FALSE, 'block' => FALSE,), // success, info, warning, error or danger
        ),
    ));
    ?>

    <?
    $this->widget('bootstrap.widgets.TbButton', array(
        'label' => 'Добавить фильтр',
        //'type' => 'primary',
        'icon' => 'plus',
        'url' => array('create'),
    ))
    ?>

    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'itemView' => '_view',
//    'itemsTagName' => 'ol',
        'template' => '{items}',
        'emptyText' => 'Не задано ни одного фильтра. Вам будут видны все заявки.',
    ));
    ?>
</div>