<?php
/* @var $this FiltersController */
/* @var $model Filters */
/* @var $form TbActiveForm */
?>
<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'                     => 'filters-form',
        'enableAjaxValidation'   => TRUE,
        'type'                   => 'horizontal',
        'enableClientValidation' => FALSE,
        'inlineErrors'           => TRUE,
    )); ?>

    <?php echo $form->errorSummary($model); ?>
    <? if (Yii::app()->user->isAdmin()) { ?>

        <?php if(!$model->isNewRecord) echo $form->hiddenField($model, 'id')?>
        <?php echo $form->dropDownListRow($model, 'organization_id', Organizations::get_banks(), array(
            'class' => 'span5',
            'ajax'  => array(
                'type'     => 'POST',
                'dataType' => 'json',
                'url'      => Yii::app()->createAbsoluteUrl('filters/availableForOrganization'),
                'success'  => 'function(data) {
                    if (data.availableObjects) {
                        $("#availableObjects").show();
                        $("#Filters_objectTypeId").html(data.availableObjects);
                    }
                    else {
                        $("#availableObjects").hide();
                    }
                }',
            ))); ?>
        <div class="control-group" id='availableObjects' <? if ($model->isNewRecord) echo "style='display: none'" ?>>
            <?php echo $form->labelEx($model, 'objectTypeId') ?>
            <div class="controls">
                <?php echo $form->dropDownList($model, 'objectTypeId', $model->isNewRecord ? array() : ObjectType::getAllInArray()) ?>
                <?php echo $form->error($model, 'objectTypeId') ?>
            </div>
        </div>
    <? } else { ?>
        <?php echo $form->dropDownListRow($model, 'objectTypeId', $model->isNewRecord ? $this->availableObjects : ObjectType::getAllInArray(), array('class' => 'span5')); ?>
    <? } ?>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'fee'); ?>
        <div class="controls">
            <div class="input-append">
                <?php echo $form->textField($model, 'fee', array('class' => 'span5')); ?>
                <span class="add-on text-center request-percent">%</span>
            </div>
            <?php echo $form->error($model, 'fee'); ?>
        </div>
    </div>

    <!--    --><?php //echo $form->textFieldRow($model, 'interest_rate', array('class' => 'span5')); ?>

    <?php echo $form->textFieldRow($model, 'min_summ', array('class' => 'span5')); ?>

    <?php echo $form->textFieldRow($model, 'max_summ', array('class' => 'span5')); ?>

    <!--    --><?php //echo $form->textFieldRow($model, 'min_period', array('class' => 'span5')); ?>
    <!---->
    <!--    --><?php //echo $form->textFieldRow($model, 'max_period', array('class' => 'span5')); ?>

    <?php echo $form->textFieldRow($model, 'min_borrower_age', array('class' => 'span5')); ?>

    <?php echo $form->textFieldRow($model, 'max_borrower_age', array('class' => 'span5')); ?>

    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type'       => 'primary',
            'label'      => $model->isNewRecord ? 'Создать' : 'Сохранить',
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->