<?php
/* @var $this RequestsController */
/* @var $dataProvider CActiveDataProvider */
?>

<h1>Заявки</h1>

<?php $this->widget('application.components.CustomGridView', array(
    'id'               => 'requests-grid',
    'type'             => 'striped bordered condensed',
    'enableHistory'    => TRUE,
    'emptyText'        => 'Результатов нет.',
    'dataProvider'     => $model->search(),
    'filter'           => $model,
    'enablePagination' => TRUE,
    'enableSorting'    => TRUE,
    'summaryTranslate' => 'заявка|заявки|заявок|заявки',
    'afterAjaxUpdate'  => "function() {
        jQuery('#Requests_passport_issue, #Requests_birthday').datepicker(jQuery.extend(jQuery.datepicker.regional['ru'],{'showAnim':'fold','dateFormat':'yy-mm-dd','changeMonth':'true','showButtonPanel':'true','changeYear':'true'}));
    }",
    'columns'          => array(
        array(
            'class'          => 'CCheckBoxColumn',
            'id'             => 'itemsSelected',
            'selectableRows' => '2',
            'htmlOptions'    => array(
                'class' => 'center',
            ),
        ),
        'id',
        'fullName',
        array(
            'name'     => 'objectTypeId',
            'value'    => '$data->type->type',
            'filter'   => ObjectType::getAllInArray(),
            'sortable' => TRUE,
        ),
        array(
            'class'       => 'bootstrap.widgets.TbButtonColumn',
            'htmlOptions' => array('style' => 'width: 50px'),
            'buttons'     => array(
                'update' => array(
                    'visible' => 'Yii::app()->user->checkAccess("editRequest")',
                ),
                'delete' => array(
                    'visible' => 'Yii::app()->user->checkAccess("deleteRequest");'
                ),
            ),
        ),
    ),
)); ?>
