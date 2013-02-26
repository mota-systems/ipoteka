<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
)); ?>


    <div class="row">
        <?php echo $form->label($model, 'organization_id'); ?>
        <?php echo $form->dropDownList($model, 'organization_id', Organizations::get_all_in_array()); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'username'); ?>
        <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'phio'); ?>
        <?php echo $form->textField($model, 'phio', array('size' => 60, 'maxlength' => 255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'work_phone'); ?>
        <?php echo $form->textField($model, 'work_phone', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'mobile_phone'); ?>
        <?php echo $form->textField($model, 'mobile_phone', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'roleId'); ?>
        <?php echo $form->dropDownList($model, 'roleId', Roles::getRolesInArray()); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Искать'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->