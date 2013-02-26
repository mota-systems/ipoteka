<?php
/* @var $this FiltersController */
/* @var $model Filters */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'organization_id'); ?>
		<?php echo $form->textField($model,'organization_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fee'); ?>
		<?php echo $form->textField($model,'fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interest_rate'); ?>
		<?php echo $form->textField($model,'interest_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_period'); ?>
		<?php echo $form->textField($model,'min_period'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_period'); ?>
		<?php echo $form->textField($model,'max_period'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_borrower_age'); ?>
		<?php echo $form->textField($model,'min_borrower_age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_borrower_age'); ?>
		<?php echo $form->textField($model,'max_borrower_age'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->