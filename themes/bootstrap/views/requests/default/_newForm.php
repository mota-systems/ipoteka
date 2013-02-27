<?php
/* @var $this RequestsController */
/* @var $model Requests */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'                     => 'requests-form',
    'enableAjaxValidation'   => TRUE,
    'type'                   => 'horizontal',
    'enableClientValidation' => FALSE,
    'inlineErrors'           => TRUE,
    'clientOptions'          => array(
        'validateOnChange'       => TRUE,
        'validateOnSubmit'       => TRUE,
        'afterValidateAttribute' => 'js:function(form, attribute, data, hasError) {
               var form_success = false;
               $("#requests-form div.control-group").each(function(i,o){
                    $(this).hasClass(\'success\') ? form_success = true : form_success = false;
               });
               if(form_success) {
                     $(\'#sendRequest\').show();
               } else {
                     $(\'#sendRequest\').hide();
               }
        }',
       /* 'beforeValidateAttribute' => 'js:function(form, attribute) {
               $(\'#sendRequest\').hide();
               $(\'#result\').hide();
        }',*/
    )
//    'enableClientValidation'=>true,
)); ?>

    <p class="note">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="control-group">
        <!--        --><?php //echo $form->labelEx($model, 'surname'); ?>
        <?php echo $form->textFieldRow($model, 'surname', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'surname'); ?>
    </div>

    <div class="control-group">
        <!--        --><?php //echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textFieldRow($model, 'name', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="control-group">
        <!--        --><?php //echo $form->labelEx($model, 'patronymic'); ?>
        <?php echo $form->textFieldRow($model, 'patronymic', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'patronymic'); ?>
    </div>
    <div class="control-group">
        <!--        --><?php //echo $form->labelEx($model, 'sex'); ?>
        <?php echo $form->dropDownListRow($model, 'sex', array(Requests::SEX_MAN => 'Мужчина', Requests::SEX_WOMEN => 'Женщина')); ?>
        <?php echo $form->error($model, 'sex'); ?>
    </div>

    <div class="control-group">
        <!--        --><?php //echo $form->labelEx($model, 'summ'); ?>
        <? echo $form->textFieldRow($model, 'summ', array('size' => 60, 'maxlength' => 100))?>
        <?php echo $form->error($model, 'summ'); ?>
    </div>

    <div class="control-group">
        <!--        --><?php //echo $form->labelEx($model, 'initialFee'); ?>
        <? echo $form->textFieldRow($model, 'initialFee', array('size' => 60, 'maxlength' => 100))?>
        <?php echo $form->error($model, 'initialFee'); ?>
    </div>

    <div class="control-group">
        <? echo $form->dropDownListRow($model, 'objectTypeId', ObjectType::getAllInArray())?>
        <?php echo $form->error($model, 'objectTypeId'); ?>
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'birthday', array('class' => 'control-label')); ?>
        <?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'       => $model,
        'attribute'   => 'birthday',
        'value'       => CTimestamp::formatDate('yyyy-MM-dd', $model->birthday),
        'language'    => 'ru',
        'htmlOptions' => '',
        'options'     => array(
            'showAnim'        => 'fold',
            'dateFormat'      => 'dd.mm.yy',
            'changeMonth'     => 'true',
            'changeYear'      => 'true',
            'showButtonPanel' => 'true',
            'defaultDate'     => '-18y',
            'maxDate'         => '+0',
            'yearRange'       => '-100:+0'
        ),
    ), TRUE); ?>
        <?php echo $form->error($model, 'birthday'); ?>
    </div>
    <? $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'  => 'ajaxSubmit',
    'url'         => array('checkFilters'),
    'label'       => 'Сделать запрос',
    'type'        => 'info',
    'size'        => 'large',
    'htmlOptions' => array('style' => 'display:none', 'id' => 'sendRequest'),
    'ajaxOptions' => array(
        'update' => '#result'
    ),
)); ?>
</div>
<!--    --><? //=CHtml::ajaxSubmitButton('Сделать запрос', array('checkFilters'), array('update' => '#result'), array('id' => 'sendRequest', 'style' => 'display:none'))?>

<div id='result'>
</div>

<?php $this->endWidget(); ?>
</div>
