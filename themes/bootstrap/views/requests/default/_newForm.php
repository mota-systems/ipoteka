<?php
/* @var $this RequestsController */
/* @var $model Requests */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'requests-form',
    'enableAjaxValidation' => TRUE,
    'clientOptions' => array(
        'validateOnChange' => TRUE,
        'validateOnSubmit' => TRUE,
        'afterValidateAttribute' => 'js:function(form, attribute, data, hasError) {
               console.log("inouted");
               var form_success = false;
               $("#requests-form div.row").each(function(i,o){
                    $(this).hasClass(\'success\') ? form_success = true : form_success = false;
               });
               if(form_success) {
                     $(\'#sendRequest\').show();
               } else {
                     $(\'#sendRequest\').hide();
               }
        }',)
//    'enableClientValidation'=>true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'surname'); ?>
        <?php echo $form->textField($model, 'surname', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'surname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'patronymic'); ?>
        <?php echo $form->textField($model, 'patronymic', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'patronymic'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'sex'); ?>
        <?php echo $form->dropDownList($model, 'sex', array(Requests::SEX_MAN => 'Мужчина', Requests::SEX_WOMEN => 'Женщина')); ?>
        <?php echo $form->error($model, 'sex'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'summ'); ?>
        <? echo $form->textArea($model, 'summ', array('size' => 60, 'maxlength' => 100))?>
        <?php echo $form->error($model, 'summ'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'initialFee'); ?>
        <? echo $form->textArea($model, 'initialFee', array('size' => 60, 'maxlength' => 100))?>
        <?php echo $form->error($model, 'initialFee'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'objectTypeId'); ?>
        <? echo $form->dropDownList($model, 'objectTypeId', ObjectType::getAllInArray())?>
        <?php echo $form->error($model, 'objectTypeId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'birthday'); ?>
        <?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model' => $model,
        'attribute' => 'birthday',
        'language' => 'ru',
        'options' => array(
            'showAnim' => 'fold',
            'dateFormat' => 'yy-mm-dd',
            'changeMonth' => 'true',
            'changeYear' => 'true',
            'showButtonPanel' => 'true',
            'defaultDate' => '-18y',
            'maxDate' => '+0',
            'yearRange' => '-100:+0'
        ),
    ), TRUE); ?>
        <?php echo $form->error($model, 'birthday'); ?>
    </div>
<!--    --><?//=CHtml::ajaxSubmitButton('Сделать запрос', array('checkFilters'), array('update' => '#result'), array('id' => 'sendRequest', 'style' => 'display:none'))?>
    <? $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'ajaxSubmit',
    'url'=>'',
    'label' => 'Сделать запрос',
    'ajaxOptions' => array(
        'update' => '#result'
    ),
)); ?>

    <div id='result'>
    </div>

    <?php $this->endWidget(); ?>
</div>
