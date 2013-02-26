<?php
/* @var $this RequestsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Заявки',
);

$this->menu=array(
	array('label'=>'Create Requests', 'url'=>array('create')),
	array('label'=>'Manage Requests', 'url'=>array('admin')),
);
?>

<h1>Заявки</h1>

<?php $this->widget('application.components.CustomGridView', array(
    'id' => 'requests-grid',
    'enableHistory' => TRUE,
    'emptyText'=> 'Результатов нет.',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'enablePagination'=>TRUE,
    'summaryTranslate'=>'заявка|заявки|заявок|заявки',
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
            'filter' => array(Requests::SEX_MAN => 'Мужчина', Requests::SEX_WOMEN => 'Женщина'),
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
