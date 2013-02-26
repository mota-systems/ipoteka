<?php
/* @var $this RequestsController */
/* @var $model Requests */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'requests-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<span><?=$model->getAttributeLabel('surname')?></span>
        <span><?=$model->surname?></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patronymic'); ?>
		<?php echo $form->textField($model,'patronymic',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'patronymic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
        <? echo $form->dropDownList($model, 'sex', array($model::SEX_MAN=>'Мужчина', $model::SEX_WOMEN=>'Женщина'))?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model,
        'attribute'=>'birthday',
        'language'=>'ru',
        'options'=>array(
            'showAnim'=>'fold',
            'dateFormat'=>'yy-mm-dd',
            'changeMonth' => 'true',
            'changeYear'=>'true',
            'showButtonPanel' => 'true',
        ),
    ),true); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday_place'); ?>
		<?php echo $form->textField($model,'birthday_place',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'birthday_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'citizenship'); ?>
		<?php echo $form->textField($model,'citizenship',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'citizenship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passport_seria'); ?>
		<?php echo $form->textField($model,'passport_seria'); ?>
		<?php echo $form->error($model,'passport_seria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passport_number'); ?>
		<?php echo $form->textField($model,'passport_number'); ?>
		<?php echo $form->error($model,'passport_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passport_issue'); ?>
        <?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model,
        'attribute'=>'passport_issue',
        'language'=>'ru',
        'options'=>array(
            'showAnim'=>'fold',
            'dateFormat'=>'yy-mm-dd',
            'changeMonth' => 'true',
            'changeYear'=>'true',
            'showButtonPanel' => 'true',
        ),
    ),true); ?>
		<?php echo $form->error($model,'passport_issue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passport_issued'); ?>
		<?php echo $form->textField($model,'passport_issued',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'passport_issued'); ?>
	</div>


    <div class="row">
        <?php echo $form->labelEx($model,'mobile_phone'); ?>
        <?php $this->widget('CMaskedTextField', array(
        'model' => $model,
        'attribute' => 'mobile_phone',
        'mask' => '+7-(999)-999-9999',
        'placeholder' => '*',
    ));
        ?>
        <?php echo $form->error($model,'mobile_phone'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать заявку' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->