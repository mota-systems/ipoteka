<?php
/* @var $this CommentsController */
/* @var $model Comments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('TbActiveForm', array(
	'id'=>'comments-form',
	'enableAjaxValidation'=>true,
//    'action'=>
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textField($model,'comment',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>
<!--    --><?// if(Yii::app()->user->checkAccess('uploadFileComment')) {?>
<!--        --><?//=$form->fileField($model, '')
//    <? } ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->