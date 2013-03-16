<?php
/* @var $this RequestsController */
/* @var $model Requests */
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
		<?php echo $form->label($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'patronymic'); ?>
		<?php echo $form->textField($model,'patronymic',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sex'); ?>
<!--		--><?php //echo $form->textField($model,'sex'); ?>
        <? echo $form->dropDownList($model, 'sex', array(0=>'Все', $model::SEX_MAN=>'Мужчина', $model::SEX_WOMEN=>'Женщина'))?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birthday'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model,'birthday_place'); ?>
		<?php echo $form->textField($model,'birthday_place',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'citizenship'); ?>
		<?php echo $form->textField($model,'citizenship',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'passport_seria'); ?>
		<?php echo $form->textField($model,'passport_seria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'passport_number'); ?>
		<?php echo $form->textField($model,'passport_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'passport_issue'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model,'passport_issued'); ?>
		<?php echo $form->textField($model,'passport_issued',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by_user_id'); ?>
		<?php echo $form->textField($model,'created_by_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_created'); ?>
        <?php echo $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model,
        'attribute'=>'date_created',
        'language'=>'ru',
        'options'=>array(
            'showAnim'=>'fold',
            'dateFormat'=>'yy-mm-dd',
            'changeMonth' => 'true',
            'changeYear'=>'true',
            'showButtonPanel' => 'true',
        ),
    ),true); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->