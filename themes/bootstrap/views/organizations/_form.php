<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'                   => 'organizations-form',
        'enableAjaxValidation'   => TRUE,
        'type'                   => 'horizontal',
        'inlineErrors'           => TRUE,

    )); ?>


    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model, 'name', array('size' => 60, 'maxlength' => 255)); ?>

    <?php echo $form->dropDownListRow($model, 'type', array(Organizations::TYPE_AGENT => 'Агент', Organizations::TYPE_BANK => 'Банк', Organizations::TYPE_ADMIN => 'Администрация')); ?>

    <div class="controls">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'label'      => $model->isNewRecord ? 'Создать' : 'Сохранить',
            'buttonType' => 'submit',
        )) ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->