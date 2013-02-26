<?php
/* @var $this CommentsController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Comments',
);

$this->menu=array(
	array('label'=>'Create Comments', 'url'=>array('create')),
	array('label'=>'Manage Comments', 'url'=>array('admin')),
);
*/
?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '//comments/_view',
    'emptyText' => 'Нет комментариев.'
));?>
<? // if(Yii::app()->user->hasFlash('commentSendOk')) {
//Yii::app()->user->setFlash('commentSendOk', 'Ваш комментарий отправлен');
//echo Yii::app()->user->getFlash('commentSendOk');
//}
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'comments-form',
    'enableAjaxValidation' => FALSE,
//    'action'=>''
)); ?>

    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->hiddenField($model, 'recipient_id');?>
    <div class="row">
        <?php echo $form->labelEx($model, 'comment'); ?>
        <?php echo $form->textField($model, 'comment', array('size' => 60, 'maxlength' => 500)); ?>
        <?php echo $form->error($model, 'comment'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Оставить комментарий'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
