<?php
/* @var $this FiltersController */
/* @var $model Filters */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'filters-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'organization_id'); ?>
		<?php echo $form->textField($model,'organization_id'); ?>
		<?php echo $form->error($model,'organization_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fee'); ?>
		<?php echo $form->textField($model,'fee'); ?>
		<?php echo $form->error($model,'fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interest_rate'); ?>
		<?php echo $form->textField($model,'interest_rate'); ?>
		<?php echo $form->error($model,'interest_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_period'); ?>
		<?php echo $form->textField($model,'min_period'); ?>
		<?php echo $form->error($model,'min_period'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_period'); ?>
		<?php echo $form->textField($model,'max_period'); ?>
		<?php echo $form->error($model,'max_period'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_borrower_age'); ?>
		<?php echo $form->textField($model,'min_borrower_age'); ?>
		<?php echo $form->error($model,'min_borrower_age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_borrower_age'); ?>
		<?php echo $form->textField($model,'max_borrower_age'); ?>
		<?php echo $form->error($model,'max_borrower_age'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->