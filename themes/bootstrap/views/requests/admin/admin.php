<?php
/* @var $this RequestsController */
/* @var $model Requests */

$this->breadcrumbs = array(
    'Заявки' => array('index'),
);

$this->menu = array(
    array('label' => 'List Requests', 'url' => array('index')),
    array('label' => 'Create Requests', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#requests-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Requests</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
    &lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search', array(
    'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'requests-grid',
    'enableHistory' => TRUE,
    'emptyText' => 'Результатов нет.',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'summaryText' => 'Найдено {count} ' . Yii::t("ipoteka", 'заявка|заявки|заявок|заявки', '{count}') . ', удовлетворяющих критериям поиска.',
    'afterAjaxUpdate' => "function() {
        jQuery('#Requests_passport_issue, #Requests_birthday').datepicker(jQuery.extend(jQuery.datepicker.regional['ru'],{'showAnim':'fold','dateFormat':'yy-mm-dd','changeMonth':'true','showButtonPanel':'true','changeYear':'true'}));
    }",
    'columns' => array(
        'id',
        'surname',
        'patronymic',
        'name',
        array(
            'name' => 'sex',
            'type' => 'raw',
            'value' => 'Requests::getNameByType($data->sex)',
            'filter' => array(0 => 'Все', Requests::SEX_MAN => 'Мужчина', Requests::SEX_WOMEN => 'Женщина'),
        ),
        array(
            'name' => 'birthday',
            'type' => 'raw',
            'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'birthday',
                'language' => 'ru',
                'options' => array(
                    'showAnim' => 'fold',
                    'dateFormat' => 'yy-mm-dd',
                    'changeMonth' => 'true',
                    'changeYear' => 'true',
                    'showButtonPanel' => 'true',
                ),
            ), TRUE),
            'htmlOptions' => array('style' => 'width:130px;'),
        ),
        /*
        'birthday_place',
        'citizenship',
        'passport_seria',
        'passport_number',
        'passport_issue',
        'passport_issued',
        'created_by_user_id',
        'date_created',
        */
        array(
            'class' => 'CButtonColumn',
            'buttons' => array(
                'update' => array(
                    'visible' => 'false',
                ),
                'delete' => array(
                    'visible' => 'false'
                ),
            ),
        ),
    ),
)); ?>
