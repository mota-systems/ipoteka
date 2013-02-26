<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'organization_id'); ?>
		<?php echo $form->dropDownList($model,'organization_id', Organizations::get_all_in_array()); ?>
		<?php echo $form->error($model,'organization_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phio'); ?>
		<?php echo $form->textField($model,'phio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'work_phone'); ?>
		<?php echo $form->textField($model,'work_phone',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'work_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_phone'); ?>
		<?php echo $form->textField($model,'mobile_phone',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'mobile_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model,'role',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->