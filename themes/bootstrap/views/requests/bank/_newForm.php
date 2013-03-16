<?php
/* @var $this RequestsController */
/* @var $model Requests */
/* @var $form TbActiveForm */
?>


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
                     $(\'#result\').show();
               }
               if(hasError) {
                     $(\'#sendRequest\').hide();
                     $(\'#result\').empty();
               }
        }',
    )
//    'enableClientValidation'=>true,
)); ?>

<p class="note">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'surname', array('size' => 60, 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'name', array('size' => 60, 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'patronymic', array('size' => 60, 'maxlength' => 100)); ?>

<?php echo $form->dropDownListRow($model, 'sex', array(Requests::SEX_MAN => 'Мужчина', Requests::SEX_WOMEN => 'Женщина')); ?>

<?php echo $form->textFieldRow($model, 'summ', array('size' => 60, 'maxlength' => 100)) ?>

<?php echo $form->textFieldRow($model, 'initialFee') ?>

<?php echo $form->dropDownListRow($model, 'objectTypeId', ObjectType::getAllInArray()) ?>

<div class="control-group">
    <?php echo $form->labelEx($model, 'birthday', array('class' => 'control-label')); ?>
    <div class='controls'>
        <?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'     => $model,
        'attribute' => 'birthday',
        'language'  => 'ru',
        'options'   => array(
            'showAnim'        => 'slide',
            'dateFormat'      => 'dd.mm.yy',
            'changeMonth'     => 'true',
            'changeYear'      => 'true',
            'showButtonPanel' => 'true',
            'defaultDate'     => '-18y',
            'maxDate'         => '-18y',
            'yearRange'       => '-100:-17'
        ),
    ), TRUE); ?>
        <?php echo $form->error($model, 'birthday'); ?>
    </div>
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
<div id='result'>
</div>
<?php $this->endWidget(); ?>
